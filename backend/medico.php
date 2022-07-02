<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Medico</title>
   <link rel="stylesheet" href="../css/styles.css">
   <script>
      if(!sessionStorage.getItem('userdata')) window.location.href = '../'
   </script>
</head>
<body>
   <?php require_once('../templates/menu_medico.php'); ?>

   <script src="../js/medico.js" type="module"></script>
</body>
</html>