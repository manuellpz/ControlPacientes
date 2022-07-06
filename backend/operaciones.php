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
      "posicion" => $row['posicion'],
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

if(isset($_GET['getFolio'])) {

   $query = "SELECT max(folio) as fol FROM recetas";
   $result = mysqli_query($con,$query);

   if(mysqli_num_rows($result) == 0) {
      echo "No hay recetas";
   }else {
      $folio = mysqli_fetch_array($result);
      echo $folio["fol"];
   }
}

if(isset($_POST['nuevaReceta'])){
   $folio = $_POST['folio'];
   $fecha = $_POST['fecha'];
   $nombre = $_POST['nombre'];
   $edad = $_POST['edad'];
   $peso = $_POST['peso'];
   $talla = $_POST['talla'];
   $presion = $_POST['presion'];
   $alergias = $_POST['alergias'];
   $diagnostico = $_POST['diagnostico'];
   $receta = $_POST['receta'];
   $medico = $_POST['medico'];

   $query = "INSERT INTO recetas(folio,fecha,nombrePaciente,edadPaciente,pesoPaciente,tallaPaciente,presionPaciente,alergiasPaciente,diagnosticoPaciente,receta,medico) VALUES($folio,'{$fecha}','{$nombre}',{$edad},$peso,'{$talla}','{$presion}','{$alergias}','{$diagnostico}','{$receta}','{$medico}')";

   mysqli_query($con,$query);

   echo "OK";
}

?>