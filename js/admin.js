import { select } from '../js/utils.js'


const data = JSON.parse(sessionStorage.getItem('userdata'))

if(data.length > 0)
   select('#saludo').textContent = `ADMIN: ${data[0].nombres} ${data[0].apellidos}`
else
   window.location.href = '../'

select('#btn_logout').addEventListener('click',() => {
   sessionStorage.removeItem('userdata')
   window.location.href = '../'
})



