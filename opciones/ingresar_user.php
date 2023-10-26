<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brick";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

$codigo_trabajador = $_POST["codigo_trabajador"];
$nombre = $_POST["nombre"];
$user = $_POST["user"];
$contra = $_POST["contra"];

$sql = "INSERT INTO usuarios (codigo_trabajador, nombre, user, contra) VALUES ('$codigo_trabajador', '$nombre', '$user', '$contra')";

if ($conn->query($sql) === true) {
    header("Location: datos_correctos.html");
    exit();
} else {
    echo "Error al ingresar el usuario: " . $conn->error;
}

$conn->close();
?>

