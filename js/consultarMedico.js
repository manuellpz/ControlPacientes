import {select} from './utils.js'

const txtConsulta = select('#txtConsultaMedico')

txtConsulta.addEventListener('keyup',e => {
   let valor = e.target.value

   fetch(`../backend/operaciones.php?consulta=${valor}`)
   .then(response => response.json())
   .then(data => {
      if(valor.length != 0){
         select('.table').classList.remove('hidden')
         const tbody = select('.table tbody')
         tbody.innerHTML = ''
         data.map(value => {
            tbody.innerHTML += `
               <tr>
                  <td>${value.nombres}</td>
                  <td>${value.apellidos}</td>
                  <td>${value.universidad}</td>
                  <td>${value.cedula}</td>
                  <td>${value.especialidad}</td>
               </tr>
            `
         })
      }
      else {
         select('.table').classList.add('hidden')
      }
      
   })
})