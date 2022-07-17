<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Médico</title>
   <link rel="stylesheet" href="./css/styles.css">
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
   <header>
      <h1 class="title">INICIAR SESION</h1>
   </header>
   <br>
   <div class="form_container">
      <form>
         <label for="txt_user">Usuario: </label>
         <input type="text" id="txt_user" required>
         <label for="txt_password">Contraseña: </label>
         <input type="password" id="txt_password" required>
         <button type="submit" id="btn_ingresar">INGRESAR</button>
      </form>
   </div>
   <br><br>
   <!-- <div class="error">Usuario y/o contraseña incorrecta</div> -->






   <script src="./js/login.js" type="module"></script>
</body>
</html>