// Validación de formulario de registro
document.addEventListener('DOMContentLoaded', function() {
    const registerForm = document.querySelector('form[action*="AuthController.php"][method="POST"]');
    
    if (registerForm && registerForm.querySelector('input[name="action"][value="register"]')) {
        registerForm.addEventListener('submit', function(event) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            
            if (password !== confirmPassword) {
                event.preventDefault();
                alert('Las contraseñas no coinciden');
            }
            
            if (password.length < 6) {
                event.preventDefault();
                alert('La contraseña debe tener al menos 6 caracteres');
            }
        });
    }
});