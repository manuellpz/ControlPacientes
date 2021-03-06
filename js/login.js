import { select,setStyles,setAlert } from "./utils.js"
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
   .then(res => {
      if(res[0].status === 'OK'){
         window.sessionStorage.setItem('userdata',JSON.stringify(res))
         window.location.href = (res[0].posicion == 'Admin') ? './backend/admin.php' : './backend/medico.php'
      }
   })
   .catch(error => {
      // const element = select('.error')
      // setStyles(element,{display:'block'})
      // setTimeout(()=>{
      //    setStyles(element,{display:"none"})
      // },3000)
      setAlert('Error','Usuario y/o Contraseña Incorrectos','info','red')
   })
})