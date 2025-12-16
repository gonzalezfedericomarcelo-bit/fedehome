<?php
// Archivo: vista_aprobar.php
session_start();
include 'conexion.php';
include 'funciones_permisos.php'; // Si tienes navbar o check de sesión

if (!isset($_SESSION['usuario_id'])) { header("Location: login.php"); exit; }

$id_parte = (int)($_GET['id'] ?? 0);

// Verificar estado actual
$stmt = $pdo->prepare("SELECT estado, fecha FROM asistencia_partes WHERE id_parte = ?");
$stmt->execute([$id_parte]);
$parte = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$parte) die("Parte no encontrado");

include 'navbar.php'; // Para mantener tu diseño
?>

<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Aprobación de Parte: <?php echo $parte['fecha']; ?></h4>
            <span class="badge bg-light text-dark"><?php echo strtoupper($parte['estado']); ?></span>
        </div>
        <div class="card-body text-center">
            
            <div class="ratio ratio-16x9 mb-4" style="height: 60vh;">
                <iframe src="asistencia_pdf.php?id=<?php echo $id_parte; ?>#toolbar=0" title="Vista Previa"></iframe>
            </div>

            <?php if ($parte['estado'] === 'pendiente'): ?>
                <div class="alert alert-warning">
                    <i class="fas fa-info-circle"></i> Este documento está pendiente de firma. Revise los datos y apruebe.
                </div>
                
                <form action="aprobar_logica.php" method="POST">
                    <input type="hidden" name="id_parte" value="<?php echo $id_parte; ?>">
                    <button type="submit" class="btn btn-success btn-lg w-50 shadow">
                        <i class="fas fa-check-circle me-2"></i> APROBAR Y FIRMAR
                    </button>
                </form>
            <?php else: ?>
                <div class="alert alert-success">
                    <i class="fas fa-check"></i> Este parte ya ha sido aprobado y firmado.
                </div>
                <a href="asistencia_pdf.php?id=<?php echo $id_parte; ?>" class="btn btn-primary">
                    <i class="fas fa-download"></i> Descargar PDF Final
                </a>
            <?php endif; ?>

        </div>
    </div>
</div>