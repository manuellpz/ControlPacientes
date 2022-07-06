<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Creando Receta</title>
   <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
   <?php  require_once('../templates/menu_medico.php'); ?>

   <div class="form_container admin_container">
      <h1>RECETA</h1> <br>
      <form>
         <div class="groupItems">
            <input type="text" id="txt_folio" readonly>

            <label for="txt_nombre">Nombre</label>
            <input type="text" id="txt_nombre"><br>

            <label for="txt_edad">Edad</label>
            <input type="text" id="txt_edad"><br>

            <label for="txt_peso">Peso</label>
            <input type="text" id="txt_peso"><br>

            <label for="txt_talla">Talla</label>
            <input type="text" id="txt_talla">
         </div>
         
         <div class="groupItems">
            <label for="txt_presion">Presion</label>
            <input type="text" id="txt_presion"><br>

            <label for="txt_alergias">Alergias</label>
            <input type="text" id="txt_alergias"><br>

            <label for="txt_diagnostico">Diagnostico</label>
            <input type="text" id="txt_diagnostico"><br>

            <label for="txt_receta">Receta</label>
            <textarea id="txt_receta" cols="30" rows="10"></textarea>
         </div>
         <button type="submit" id="btn_generarReceta">Generar Receta</button>
      </form>
   </div>
   <script src="../js/medico.js" type="module"></script>
   <script src="../js/nuevaReceta.js" type="module"></script>
</body>
</html>