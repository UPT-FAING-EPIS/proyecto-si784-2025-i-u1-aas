<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Generador de Documentación</title>
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Iniciar Sesión</h1>
            
            <?php if(isset($_SESSION['success_message'])): ?>
                <div class="alert alert-success">
                    <?php 
                        echo $_SESSION['success_message']; 
                        unset($_SESSION['success_message']);
                    ?>
                </div>
            <?php endif; ?>
            
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
                <input type="hidden" name="action" value="login">
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </div>
                
                <p class="text-center">¿No tienes una cuenta? <a href="register.php">Regístrate aquí</a></p>
            </form>
        </div>
    </div>
</body>
</html>