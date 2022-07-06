import { select,getTime } from "./utils.js";
import {data} from "./medico.js"

const getUltimoFolio = () => {
   fetch('../backend/operaciones.php?getFolio')
   .then(response => response.text())
   .then(data => {
      let folio = parseInt(data)
      select('#txt_folio').value = ++folio
   })
   .catch(error=>console.log(error))
}

document.addEventListener('load', getUltimoFolio())

const btnGenerar = select('#btn_generarReceta')

const folio = parseInt(select('#txt_folio').value)
const fecha = getTime()
const nombre = select('#txt_nombre').value
const edad = parseInt(select('#txt_edad').value)
const peso = select('#txt_peso').value
const talla = select('#txt_talla').value
const presion = select('#txt_presion').value
const alergias = select('#txt_alergias').value
const diagnostico = select('#txt_diagnostico').value
const receta = select('#txt_receta').value
const medico = `${data[0].nombres} ${data[0].apellidos}`

const datos = new FormData()
datos.append("folio",folio)
datos.append("fecha",fecha)
datos.append("nombre",nombre)
datos.append("edad",edad)
datos.append("peso",peso)
datos.append("talla",talla)
datos.append("presion",presion)
datos.append("alergias",alergias)
datos.append("diagnostico",diagnostico)
datos.append("receta",receta)
datos.append("medico",medico)
datos.append("nuevaReceta","")

btnGenerar.addEventListener('click',(e)=>{
   e.preventDefault()

   fetch('../backend/operaciones.php',{
      method:'post',
      body:datos
   })
   .then(response => response.text())
   .then(respuesta => console.log(respuesta))
   .catch(error => console.log(error))
})