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

?>