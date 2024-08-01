const formDatos = document.querySelector("#form-datos")
const objRegex = {
    telefono: /9\d{2}(\s?\d{3}){2}$/, //validar que tenga 9 caracteres y que esten todos juntos
    gmail: /^[\w\.-]+@(gmail|outlook|hotmail|ucsm|senati)\.(com|edu.pe|pe)$/ //validar la estructura de un correo electrónico
};

formDatos.addEventListener("submit", (e) =>{
    e.preventDefault();
    obteniendoDatosInputsYValidaciones()
})

function obteniendoDatosInputsYValidaciones(){
    const nombre = document.getElementById("nombre")
    const apellido = document.getElementById("apellido")
    const documento = document.getElementById("documento")

    const numeroDocumento = document.getElementById("numero-documento")
    const email = document.getElementById("email")
    const celular = document.getElementById("celular")

    const direccion = document.getElementById("direccion")
    const distrito = document.getElementById("distrito")
    const ciudad = document.getElementById("ciudad")
    const tipoReclamo = document.getElementById("tipo-reclamo")

    const servicioContratado = document.getElementById("servicio-contratado")
    const reclamoPerson = document.getElementById("cual-reclamo-person")
    const checkReclamoForm = document.getElementById("check-reclamo-form")
    const aceptaPoliticaPrivacidad = document.getElementById("acepta-politica-privacidad")

    //validaciones:
    if(nombre.value === '') return alert("Debe de rellenar el nombre")
    if(apellido.value === '') return alert("Debe de rellenar el apellido")
    if(documento.value === '') return alert("Debe de seleccionar un documento")


    if(numeroDocumento.value === '') return alert("Debe de rellenar el numero de documento")
    if(!objRegex.gmail.test(email.value)) return alert("Debe de colocar un correo valido")
    if(!objRegex.telefono.test(celular.value)) return alert("Debe de rellenar el numero de celular correctamente")


    if(direccion.value === '') return alert("Debe de colocar una direccion")
    if(distrito.value === '') return alert("Debe de colocar un distrito")
    if(ciudad.value === '') return alert("Debe de colocar una ciudad")
    if(tipoReclamo.value === '') return alert("Debe de seleccionar un tipo de reclamo")

    if(servicioContratado.value === '') return alert("Debe de colocar un servicio contratado")
    if(reclamoPerson.value === '') return alert("Debe de colocar el reclamo")
    if(!checkReclamoForm.checked) return alert("Debe de aceptar las normas - Seleccione el checkbox 1")
    if(!aceptaPoliticaPrivacidad.checked) return alert("Debe de aceptar las politicas de privacidad- Seleccione el checkbox 2")
    
    //esta funcion sirve para preparar los datos correctos y enviarlos a otra funcion para que lo envie al server

    preparacionInputs(nombre, apellido, documento, numeroDocumento, email, 
        celular, direccion, distrito, ciudad, tipoReclamo, servicioContratado, reclamoPerson, 
        checkReclamoForm, aceptaPoliticaPrivacidad)
      
    limpiarDatos(nombre, apellido, documento, numeroDocumento, email, celular, direccion, 
        distrito, ciudad, tipoReclamo, servicioContratado, reclamoPerson, checkReclamoForm, aceptaPoliticaPrivacidad)
}

function preparacionInputs(nombre, apellido, documento, numeroDocumento, email, celular, direccion, 
    distrito, ciudad, tipoReclamo, servicioContratado, reclamoPerson, checkReclamoForm, aceptaPoliticaPrivacidad){

    const form = new FormData();
    form.append("nombre", nombre.value)
    form.append("apellido", apellido.value)
    form.append("documento", documento.value)
    form.append("numeroDocumento", numeroDocumento.value)
    form.append("email", email.value)
    form.append("celular", celular.value)
    form.append("direccion", direccion.value)
    form.append("distrito", distrito.value)
    form.append("ciudad", ciudad.value)
    form.append("tipoReclamo", tipoReclamo.value)
    form.append("servicioContratado", servicioContratado.value)
    form.append("reclamoPerson", reclamoPerson.value)
    form.append("checkReclamoForm", checkReclamoForm.value)
    form.append("aceptaPoliticaPrivacidad", aceptaPoliticaPrivacidad.value)

    enviandoDatosServidorInputs(form)
};

function enviandoDatosServidorInputs(form){

    fetch("./app/trigger/libroReclamacion.php?action=ADD", {
        method: "POST",
        body: form
    })
        .then(res => res.json())
        .then(console.log)
        .catch(err => console.log(err))
}

function limpiarDatos(nombre, apellido, documento, numeroDocumento, email, celular, direccion, 
    distrito, ciudad, tipoReclamo, servicioContratado, reclamoPerson, checkReclamoForm, aceptaPoliticaPrivacidad) {
    
    nombre.value = "";
    apellido.value = "";
    documento.value = "";
    numeroDocumento.value = "";
    email.value = "";
    celular.value = "";
    direccion.value = "";
    distrito.value = "";
    ciudad.value = "";
    tipoReclamo.value = "";
    servicioContratado.value = "";
    reclamoPerson.value = "";
    checkReclamoForm.checked = false;
    aceptaPoliticaPrivacidad.checked = false;
}