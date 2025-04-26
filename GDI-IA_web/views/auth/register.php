<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Generador de Documentación</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Crear Cuenta</h1>
            
            <?php if(isset($_SESSION['errors'])): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php 
                            foreach($_SESSION['errors'] as $error) {
                                echo "<li>{$error}</li>";
                            }
                            unset($_SESSION['errors']);
                        ?>
                    </ul>
                </div>
            <?php endif; ?>
            
            <form action="../../controllers/AuthController.php" method="POST">
                <input type="hidden" name="action" value="register">
                
                <div class="form-group">
                    <label for="nombre">Nombre Completo</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                    <small>La contraseña debe tener al menos 6 caracteres</small>
                </div>
                
                <div class="form-group">
                    <label for="confirm_password">Confirmar Contraseña</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </div>
                
                <p class="text-center">¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a></p>
            </form>
        </div>
    </div>
</body>
</html>