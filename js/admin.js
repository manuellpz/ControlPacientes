import { select } from '../js/utils.js'


const data = JSON.parse(localStorage.getItem('userdata'))


select('#saludo').textContent = `Bienvenido ${data[0].nombres} ${data[0].apellidos}`