<?php
class User {
    private $conn;
    private $table_name = "Usuarios";

    public $id_usuario;
    public $nombre;
    public $email;
    public $password;
    public $fecha_registro;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Crear un nuevo usuario
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " 
                  SET nombre=:nombre, email=:email, password=:password";

        $stmt = $this->conn->prepare($query);

        // Sanitizar datos
        $this->nombre = htmlspecialchars(strip_tags($this->nombre));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));

        // Encriptar contraseña
        $password_hash = password_hash($this->password, PASSWORD_BCRYPT);

        // Vincular valores
        $stmt->bindParam(":nombre", $this->nombre);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $password_hash);

        // Ejecutar consulta
        if($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Verificar si el email ya existe
    public function emailExists() {
        $query = "SELECT id_usuario, nombre, email, password 
                FROM " . $this->table_name . " 
                WHERE email = ? 
                LIMIT 0,1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->email);
        $stmt->execute();

        $num = $stmt->rowCount();

        if($num > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->id_usuario = $row['id_usuario'];
            $this->nombre = $row['nombre'];
            $this->email = $row['email'];
            $this->password = $row['password'];

            return true;
        }

        return false;
    }
}
?>