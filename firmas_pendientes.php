<?php
// Archivo: firmas_pendientes.php
session_start();
include 'conexion.php';
include 'funciones_permisos.php'; // O tu navbar

// Seguridad
if (!isset($_SESSION['usuario_id'])) { header("Location: login.php"); exit; }

// Buscar partes que estén PENDIENTES
// (Opcional: Si soy Admin veo todos, si soy Cañete veo todos)
$sql = "SELECT p.*, u.nombre_completo as creador 
        FROM asistencia_partes p 
        JOIN usuarios u ON p.id_creador = u.id_usuario 
        WHERE p.estado = 'pendiente' 
        ORDER BY p.fecha DESC";

$pendientes = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

include 'navbar.php';
?>

<div class="container mt-5">
    <div class="card shadow border-warning">
        <div class="card-header bg-warning text-dark d-flex justify-content-between align-items-center">
            <h4 class="mb-0"><i class="fas fa-signature"></i> Documentos Pendientes de Firma</h4>
        </div>
        <div class="card-body">
            
            <?php if (count($pendientes) > 0): ?>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Fecha del Parte</th>
                                <th>Creado Por</th>
                                <th>Estado</th>
                                <th class="text-end">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pendientes as $row): ?>
                            <tr>
                                <td class="fw-bold"><?php echo date('d/m/Y', strtotime($row['fecha'])); ?></td>
                                <td><?php echo htmlspecialchars($row['creador']); ?></td>
                                <td><span class="badge bg-warning text-dark">Pendiente Firma Encargado</span></td>
                                <td class="text-end">
                                    <a href="vista_aprobar.php?id=<?php echo $row['id_parte']; ?>" class="btn btn-primary btn-sm">
                                        <i class="fas fa-eye me-1"></i> Revisar y Firmar
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <div class="alert alert-success text-center mb-0">
                    <i class="fas fa-check-circle fa-2x mb-3 d-block"></i>
                    ¡Todo al día! No hay partes pendientes de aprobación.
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>