import { select,getTime } from "./utils.js";

const getUltimoFolio = () => {
   fetch('../backend/operaciones.php?getFolio')
   .then(response => response.text())
   .then(data => {
      let folio = parseInt(data)
      select('#txt_folio').value = ++folio
   })
   .catch(error=>console.log(error))
}

getUltimoFolio()