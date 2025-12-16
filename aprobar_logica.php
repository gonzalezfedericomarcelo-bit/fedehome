<?php
// Archivo: aprobar_logica.php
session_start();
include 'conexion.php';

// Solo permitir si está logueado
if (!isset($_SESSION['usuario_id'])) { header("Location: login.php"); exit; }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_parte = $_POST['id_parte'];

    // Seguridad: Verificar que quien aprueba sea Cañete (o admin/encargado)
    // Esto es opcional pero recomendado
    $id_user = $_SESSION['usuario_id'];
    $stmt_check = $pdo->prepare("SELECT nombre_completo FROM usuarios WHERE id_usuario = ?");
    $stmt_check->execute([$id_user]);
    $nombre = $stmt_check->fetchColumn();

    if (stripos($nombre, 'Cañete') === false && $_SESSION['usuario_rol'] !== 'admin') {
        die("No tienes permisos para firmar como Encargado.");
    }

    // Actualizar estado
    $stmt = $pdo->prepare("UPDATE asistencia_partes SET estado = 'aprobado' WHERE id_parte = ?");
    $stmt->execute([$id_parte]);

    // Redirigir al PDF final o volver a la vista
    header("Location: vista_aprobar.php?id=" . $id_parte);
    exit();
}
?>