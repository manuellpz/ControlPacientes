<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Consulta Medico</title>
   <link rel="stylesheet" href="https://manuellpz.github.io/bootstrap.min.css">
   <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
   <?php require_once('../templates/menu_admin.php'); ?>

   <div class="form_container">
      <h1>Consultar Médico</h1>
      <form>
         <label for="txtConsultaMedico">Buscar: </label>
         <input type="text" id="txtConsultaMedico">
      </form>
      <table class="table table-dark  hidden">
         <thead>
            <tr>
               <th>Nombre</th>
               <th>Apellidos</th>
               <th>Universidad</th>
               <th>Cedula</th>
               <th>Especialidad</th>
            </tr>
         </thead>
         <tbody></tbody>
      </table>
   </div>

   <script src="../js/admin.js" type="module"></script>
   <script src="../js/consultarMedico.js" type="module"></script>
</body>
</html>