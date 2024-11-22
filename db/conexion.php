<?php
class DBGestionLibreria {
  private $server = "localhost";
  private $database = "dblibreria";
  private $user = "root";
  private $password = "";

  private function getConexion() {
    try {
        $dns = "mysql:host={$this->server};dbname={$this->database};charset=utf8mb4";
        $obPDO = new PDO($dns, $this->user, $this->password);
        $obPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $obPDO;
    } catch (PDOException $e) {
        die("Error de conexión: " . $e->getMessage());
    }
  }

  public function getLibros() {
    try {
        $pdoConexion = $this->getConexion();
        $sql = "SELECT * from titulos;";
        $stmt = $pdoConexion->query($sql);
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "<script>console.log(" . json_encode($resultado) . ");</script>";

        return $resultado;
    } catch (PDOException $e) {
        die("Error en la consulta: " . $e->getMessage());
        echo "<script>console.log('{$e->getMessage()}');</script>";
    }
  }
  public function getAutores() {
    try {
        $pdoConexion = $this->getConexion();
        $sql = "SELECT * from autores;";
        $stmt = $pdoConexion->query($sql);
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "<script>console.log(" . json_encode($resultado) . ");</script>";

        return $resultado;
    } catch (PDOException $e) {
        die("Error en la consulta: " . $e->getMessage());
        echo "<script>console.log('{$e->getMessage()}');</script>";
    }
  }
  public function insertarContacto($fecha, $correo, $nombre, $asunto, $comentario) {
    try {
        $pdoConexion = $this->getConexion();
        $sql = "INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) 
                VALUES (:fecha, :correo, :nombre, :asunto, :comentario)";
        $stmt = $pdoConexion->prepare($sql);

        $stmt->bindParam(':fecha', $fecha);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':asunto', $asunto);
        $stmt->bindParam(':comentario', $comentario);

        $stmt->execute();

        echo "Registro insertado correctamente.";
    } catch (PDOException $e) {
        die("Error al insertar el contacto: " . $e->getMessage());
    }
}

}
