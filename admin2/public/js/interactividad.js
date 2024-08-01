
// PAGINA PRINCIPAL
// Ciculos de "Nuestros servicios"
const disenoDesarrolloWebCircle = document.querySelector(".nuestros-servicios .diseno-desarrollo-web");
const gestionRedesSocialesCircle = document.querySelector(".nuestros-servicios .gestion-redes-sociales");
const marketingGestionDigitalCircle = document.querySelector(".nuestros-servicios .marketing-gestion-digital");
const brandingDisenoCircle = document.querySelector(".nuestros-servicios .branding-diseno");

// Texto e imagen interactiva de "Nuestros servicios"
const constinerServicioMainTop = document.querySelector(".interactivo-top")
const textoServicioMainTop = document.querySelector(".interactivo-top .nuestros-servicios-text-interactivo");
const imgServicioMainTop = document.querySelector(".interactivo-top .nuestros-servicios-img-interactivo img");

const constinerServicioMainBottom = document.querySelector(".interactivo-bottom")
const textoServicioMainBottom = document.querySelector(".interactivo-bottom .nuestros-servicios-text-interactivo");
const imgServicioMainBottom = document.querySelector(".interactivo-bottom .nuestros-servicios-img-interactivo img");

// Ancho de la pantalla
var anchoPagina = window.innerWidth;

if (anchoPagina >= 984) {
    disenoDesarrolloWebCircle.addEventListener("mouseover", () => {
        constinerServicioMainTop.style.display = "block";
        textoServicioMainTop.textContent = "*La creación de una experiencia web óptima mediante la presentación organizada de contenido.*";
        imgServicioMainTop.src = './public/img/servis_wepb/services1/desarrollo-diseno-nuestros-servicios.webp';
    })

    gestionRedesSocialesCircle.addEventListener("mouseover", () => {
        constinerServicioMainTop.style.display = "block";
        textoServicioMainTop.textContent = "*La optimización estratégica para impacto, alcance y presencia de una marca.*";
        imgServicioMainTop.src = "./public/img/servis_wepb/services2/gestion-redes-sociales-nuestros-servicios.webp";
    })

    marketingGestionDigitalCircle.addEventListener("mouseover", () => {
        constinerServicioMainTop.style.display = "block";
        textoServicioMainTop.textContent = "*La ampliación de alcance y fortalecimiento de relaciones con clientes en línea.*";
        imgServicioMainTop.src = "./public/img/servis_wepb/services3/marketing-gestion-digital-nuestros-servicios.webp";
    })

    brandingDisenoCircle.addEventListener("mouseover", () => {
        constinerServicioMainTop.style.display = "block";
        textoServicioMainTop.textContent = "*La unión de estos genera experiencias memorables, conexión emocional y diferenciación de otros.";
        imgServicioMainTop.src = "./public/img/servis_wepb/services4/branding-diseno-nuestros-servicios.webp";
    })

} if ((anchoPagina < 560) ) {
    constinerServicioMainTop.style.display = "none";

    disenoDesarrolloWebCircle.addEventListener("mouseover", () => {
        constinerServicioMainBottom.style.display = "block";
        textoServicioMainBottom.textContent = "La creación de una experiencia web óptima mediante la presentación organizada de contenido.";
        imgServicioMainBottom.src = './public/img/servis_wepb/services1/desarrollo-diseno-nuestros-servicios.webp';
        gestionRedesSocialesCircle.style.borderColor = "rgb(0 155 255)";
        marketingGestionDigitalCircle.style.borderColor = "rgb(0 155 255)";
        brandingDisenoCircle.style.borderColor = "rgb(0 155 255)";
        disenoDesarrolloWebCircle.style.borderColor = "rgb(0 155 255)";
    })

    gestionRedesSocialesCircle.addEventListener("mouseover", () => {
        constinerServicioMainBottom.style.display = "block";
        textoServicioMainBottom.textContent = "La optimización estratégica para impacto, alcance y presencia de una marca.";
        imgServicioMainBottom.src = "./public/img/servis_wepb/services2/gestion-redes-sociales-nuestros-servicios.webp";
        disenoDesarrolloWebCircle.style.borderColor = "rgb(235 33 151)";
        marketingGestionDigitalCircle.style.borderColor = "rgb(235 33 151)";
        brandingDisenoCircle.style.borderColor = "rgb(235 33 151)";
        gestionRedesSocialesCircle.style.borderColor = "rgb(235 33 151)";
    })

    marketingGestionDigitalCircle.addEventListener("mouseover", () => {
        constinerServicioMainBottom.style.display = "block";
        textoServicioMainBottom.textContent = "La ampliación de alcance y fortalecimiento de relaciones con clientes en línea.";
        imgServicioMainBottom.src = "./public/img/servis_wepb/services3/marketing-gestion-digital-nuestros-servicios.webp";
        gestionRedesSocialesCircle.style.borderColor = "rgb(123 34 179)";
        brandingDisenoCircle.style.borderColor = "rgb(123 34 179)";
        disenoDesarrolloWebCircle.style.borderColor = "rgb(123 34 179)";
        marketingGestionDigitalCircle.style.borderColor = "rgb(123 34 179)";
    })

    brandingDisenoCircle.addEventListener("mouseover", () => {
        constinerServicioMainBottom.style.display = "block";
        textoServicioMainBottom.textContent = "La unión de estos genera experiencias memorables, conexión emocional y diferenciación de otros.";
        imgServicioMainBottom.src = "./public/img/servis_wepb/services4/branding-diseno-nuestros-servicios.webp";
        disenoDesarrolloWebCircle.style.borderColor = "rgb(255 94 3)";
        marketingGestionDigitalCircle.style.borderColor = "rgb(255 94 3)";
        gestionRedesSocialesCircle.style.borderColor = "rgb(255 94 3)";
        brandingDisenoCircle.style.borderColor = "rgb(255 94 3)";
    })
}

