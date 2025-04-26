<?php
session_start();

// Verificar si el usuario está logueado
if(!isset($_SESSION['id_usuario'])) {
    header('Location: views/auth/login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Documentación - Inicio</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <header class="main-header">
        <div class="container">
            <div class="header-content">
                <h1>Generador de Documentación</h1>
                <div class="user-info">
                    <span>Bienvenido, <?php echo $_SESSION['nombre']; ?></span>
                    <form action="controllers/AuthController.php" method="POST" style="display: inline;">
                        <input type="hidden" name="action" value="logout">
                        <button type="submit" class="btn btn-logout">Cerrar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    
    <main class="container">
        <div class="welcome-section">
            <h2>Bienvenido a tu Plataforma de Generación de Documentación</h2>
            <p>Esta plataforma te ayudará a crear documentación para tus proyectos de manera rápida y eficiente.</p>
            
            <div class="action-buttons">
                <a href="#" class="btn btn-primary">Crear Nuevo Proyecto</a>
                <a href="#" class="btn btn-secondary">Ver Mis Proyectos</a>
            </div>
        </div>
    </main>
    
    <footer class="main-footer">
        <div class="container">
            <p>&copy; 2025 Generador de Documentación. Todos los derechos reservados.</p>
        </div>
    </footer>
    
    <script src="assets/js/scripts.js"></script>
</body>
</html>