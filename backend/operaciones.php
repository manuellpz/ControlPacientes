<?php
require_once('./Conexion.php');

$conexion = new Conexion('localhost','root','','consultorio');
$con = $conexion->conectar();

if(isset($_POST['user'])) {
   $user = $_POST['user'];
   $pass = $_POST['pass'];

   $query = "SELECT * FROM usuarios WHERE usuario='{$user}' AND contrasena='{$pass}' ";
   $result = mysqli_query($con,$query);

   
   $row = mysqli_fetch_array($result);
   $data[] = Array(
      "id" => $row['id'],
      "nombres" => $row['nombres'],
      "apellidos" => $row['apellidos'],
      "status" => 'OK'
   );

   echo json_encode($data);
}

if(isset($_POST['nombres'])) {
   $nombres = $_POST['nombres'];
   $apellidos = $_POST['apellidos'];
   $universidad = $_POST['universidad'];
   $cedula = $_POST['cedula'];
   $especialidad = $_POST['especialidad'];
   $usuario = $_POST['usuario'];
   $contrasena = $_POST['contrasena'];

   $query = "INSERT INTO usuarios(nombres,apellidos,universidad,cedula,especialidad,usuario,contrasena) VALUES('{$nombres}','{$apellidos}','{$universidad}','{$cedula}','{$especialidad}','{$usuario}','{$contrasena}')";

   mysqli_query($con,$query);

   echo "OK";
}

?>