import { select } from '../js/utils.js'


const data = JSON.parse(sessionStorage.getItem('userdata'))

select('#logout').addEventListener('click',() => {
   sessionStorage.removeItem('userdata')
   window.location.href = '../'
})


select('#saludo').textContent = `Bienvenido ${data[0].nombres} ${data[0].apellidos}`

