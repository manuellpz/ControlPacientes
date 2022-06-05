<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/styles.css">
   <title>Administrador</title>
   <script>
      if(!sessionStorage.getItem('userdata'))
         window.location.href = '../'
   </script>
</head>
<body>
   <header>
      <h1 id="saludo" class="title">Hola, Bienvenido</h1>
      <button id="logout">Salir</button>
   </header>


   <script src="../js/admin.js" type="module"></script>
</body>
</html>