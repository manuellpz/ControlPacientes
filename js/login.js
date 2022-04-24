import { select } from "./utils.js"
const btnIngresar = document.querySelector('#btn_ingresar')

addEventListener('submit',e => {
   e.preventDefault()
   const user = select('#txt_user').value
   const pass = select('#txt_password').value
   
   const data = new FormData()
   data.append('user',user)
   data.append('pass',pass)

   fetch('./backend/operaciones.php',{
      method: 'post',
      body: data
   })
   .then(response => response.json())
   .then(res => console.log(res))
})