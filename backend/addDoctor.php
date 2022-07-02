<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nuevo Doctor</title>
   <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
   <?php include_once('../templates/menu_admin.php'); ?>

   <div class="form_container admin_container">
      <h1>Nuevo Doctor</h1> <br>
      <form>
         <div class="groupItems">
            <label for="txt_nombres">Nombres</label>
            <input type="text" id="txt_nombres">

            <label for="txt_apellidos">Apellidos</label>
            <input type="text" id="txt_apellidos">

            <label for="txt_universidad">Universidad</label>
            <input type="text" id="txt_universidad">

            <label for="txt_cedula">Cedula</label>
            <input type="text" id="txt_cedula">
         </div>
         
         <div class="groupItems">
            <label for="txt_especialidad">Especialidad</label>
            <input type="text" id="txt_especialidad">

            <label for="txt_usuario">Usuario</label>
            <input type="text" id="txt_usuario">

            <label for="txt_contrasena">Contrasena</label>
            <input type="text" id="txt_contrasena"><br>
         </div>
         <button type="submit" id="btn_addDoctor">AGREGAR</button>
      </form>
      
   </div>
   <script src="../js/admin.js" type="module"></script>
   <script src="../js/newDoctor.js" type="module"></script>
</body>
</html>