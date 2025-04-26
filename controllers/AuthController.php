<?php
session_start();
require_once '../config/database.php';
require_once '../models/User.php';

class AuthController {
    private $database;
    private $db;
    private $user;

    public function __construct() {
        $this->database = new Database();
        $this->db = $this->database->getConnection();
        $this->user = new User($this->db);
    }

    public function register($nombre, $email, $password, $confirm_password) {
        $errors = [];

        // Validar campos
        if(empty($nombre)) {
            $errors[] = "El nombre es requerido";
        }

        if(empty($email)) {
            $errors[] = "El email es requerido";
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Formato de email inválido";
        }

        if(empty($password)) {
            $errors[] = "La contraseña es requerida";
        } elseif(strlen($password) < 6) {
            $errors[] = "La contraseña debe tener al menos 6 caracteres";
        }

        if($password !== $confirm_password) {
            $errors[] = "Las contraseñas no coinciden";
        }

        // Verificar si el email ya existe
        $this->user->email = $email;
        if($this->user->emailExists()) {
            $errors[] = "El email ya está registrado";
        }

        // Si hay errores, retornarlos
        if(!empty($errors)) {
            return [
                'success' => false,
                'errors' => $errors
            ];
        }

        // Crear usuario
        $this->user->nombre = $nombre;
        $this->user->password = $password;

        if($this->user->create()) {
            return [
                'success' => true,
                'message' => 'Usuario registrado exitosamente'
            ];
        } else {
            return [
                'success' => false,
                'errors' => ['Error al registrar usuario']
            ];
        }
    }

    public function login($email, $password) {
        $errors = [];

        // Validar campos
        if(empty($email)) {
            $errors[] = "El email es requerido";
        }

        if(empty($password)) {
            $errors[] = "La contraseña es requerida";
        }

        // Si hay errores, retornarlos
        if(!empty($errors)) {
            return [
                'success' => false,
                'errors' => $errors
            ];
        }

        // Verificar si el email existe
        $this->user->email = $email;
        
        if($this->user->emailExists()) {
            // Verificar contraseña
            if(password_verify($password, $this->user->password)) {
                // Crear sesión
                $_SESSION['id_usuario'] = $this->user->id_usuario;
                $_SESSION['nombre'] = $this->user->nombre;
                $_SESSION['email'] = $this->user->email;
                
                return [
                    'success' => true,
                    'message' => 'Inicio de sesión exitoso'
                ];
            } else {
                return [
                    'success' => false,
                    'errors' => ['Contraseña incorrecta']
                ];
            }
        } else {
            return [
                'success' => false,
                'errors' => ['Email no encontrado']
            ];
        }
    }

    public function logout() {
        // Destruir todas las variables de sesión
        $_SESSION = array();
        
        // Destruir la sesión
        session_destroy();
        
        return [
            'success' => true,
            'message' => 'Sesión cerrada exitosamente'
        ];
    }
}

// Procesar solicitudes
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $auth = new AuthController();
    
    if (isset($_POST['action'])) {
        $action = $_POST['action'];
        
        if ($action === 'register') {
            $result = $auth->register(
                $_POST['nombre'] ?? '',
                $_POST['email'] ?? '',
                $_POST['password'] ?? '',
                $_POST['confirm_password'] ?? ''
            );
            
            if ($result['success']) {
                $_SESSION['success_message'] = $result['message'];
                header('Location: ../views/auth/login.php');
                exit;
            } else {
                $_SESSION['errors'] = $result['errors'];
                header('Location: ../views/auth/register.php');
                exit;
            }
        } elseif ($action === 'login') {
            $result = $auth->login(
                $_POST['email'] ?? '',
                $_POST['password'] ?? ''
            );
            
            if ($result['success']) {
                $_SESSION['success_message'] = $result['message'];
                header('Location: ../index.php');
                exit;
            } else {
                $_SESSION['errors'] = $result['errors'];
                header('Location: ../views/auth/login.php');
                exit;
            }
        } elseif ($action === 'logout') {
            $auth->logout();
            header('Location: ../views/auth/login.php');
            exit;
        }
    }
}
?>