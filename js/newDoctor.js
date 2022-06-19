import {select} from '../js/utils.js'

addEventListener('submit',e => {
   e.preventDefault()
   const nombres = select('#txt_nombres').value
   const apellidos = select('#txt_apellidos').value
   const universidad = select('#txt_universidad').value
   const cedula = select('#txt_cedula').value
   const especialidad = select('#txt_especialidad').value
   const usuario = select('#txt_usuario').value
   const contrasena = select('#txt_contrasena').value

   const data = new FormData()
   data.append('nombres',nombres)
   data.append('apellidos',apellidos)
   data.append('universidad',universidad)
   data.append('cedula',cedula)
   data.append('especialidad',especialidad)
   data.append('usuario',usuario)
   data.append('contrasena',contrasena)

   fetch('../backend/operaciones.php',{
      method:'post',
      body:data
   })
   .then(response => response.text())
   .then(respuesta => console.log(respuesta))
})