// Definir los intervalos de tiempo entre cada mensaje en milisegundos
const intervalos = [0, 300000, 500000]; // Intervalos entre el primer, segundo y tercer mensaje

// ENVIO DE MENSAJES DE CORREO
// Función para guardar los datos en el localStorage (Correo)
function guardarDatosEnLocalStorageCorreo(data) {
  localStorage.setItem("correoData", JSON.stringify(data));
}

// Función para obtener la dirección de correo del localStorage (Correo)
function obtenerCorreoDelLocalStorage() {
  const data = localStorage.getItem("correoData");
  return data ? JSON.parse(data).correo : null;
}

// Función para obtener los datos del localStorage (Correo)
function obtenerDatosDelLocalStorageCorreo() {
  const data = localStorage.getItem("correoData");
  return data ? JSON.parse(data) : null;
}

// Función para obtener el index del servicio del localStorage (Correo)
function obtenerIndexDelServicioDelLocalStorageCorreo() {
  const data = localStorage.getItem("correoData");
  return data ? JSON.parse(data).service : null;
}

function enviarDatosCorreo(email, indexService) {
  console.log("Enviando... mensajes a correo para la dirección:", email);

  function enviarMensaje(index) {
    enviarEmailAjax(email, index, indexService);
    sentMessages.push({
      index,
      time: new Date().getTime(),
    });

    guardarDatosEnLocalStorageCorreo({
      correo: email,
      sentMessages: sentMessages,
      service: indexService,
    });

    // Si se ha enviado el tercer mensaje, eliminar los datos del localStorage
    if (index === 2) {
      console.log(
        "Eliminando localStorage después de enviar todos los mensajes de correo."
      );
      localStorage.removeItem("correoData");
    }
  }

  const storedData = obtenerDatosDelLocalStorageCorreo();
  const sentMessages = storedData ? storedData.sentMessages || [] : [];
  let messageIndex = sentMessages.length; // Indica el índice del siguiente mensaje a enviar

  // Si no hay mensajes pendientes, enviar el primer mensaje
  if (messageIndex === 0) {
    enviarSiguienteMensaje();
  } else {
    // Si hay mensajes pendientes, reanudar el envío desde el próximo mensaje
    setTimeout(enviarSiguienteMensaje, intervalos[messageIndex]);
  }

  // Función para verificar y enviar el siguiente mensaje
  function enviarSiguienteMensaje() {
    if (messageIndex < 3) {
      enviarMensaje(messageIndex);
      messageIndex++;
      setTimeout(enviarSiguienteMensaje, intervalos[messageIndex]);
    }
  }
}

function enviarEmailAjax(email, index, indexServiceUser) {
  const body = new FormData();
  const emailDataModal1 = email;

  body.append("id_servicio", indexServiceUser);
  body.append("index", index);

  if (obtenerDatosDelLocalStorageCorreo() === null) {
    body.append("email", emailDataModal1);
    console.log("Email:", emailDataModal1);
  } else {
    body.append("email", obtenerDatosDelLocalStorageCorreo().correo);
    console.log("Email:", obtenerDatosDelLocalStorageCorreo().correo);
  }

  // Enviar la solicitud POST al servidor
  fetch("./public/message/Controller/process.php", {
    method: "POST",
    body: body,
  })
    .then((response) => response.text()) // Convertir la respuesta a texto
    .then((data) => {
      // Manejar la respuesta del servidor
      console.log("Respuesta del servidor Gmail Es:", data);
    })
    .catch((error) => {
      // Manejar cualquier error que ocurra durante la solicitud
      console.error("Error al enviar formulario a Gmail:", error);
      alert("Email no Enviado: ", error);
    });
}

// ENVIO DE MENSAJES DE WHATSAPP
// Función para guardar los datos en el localStorage (WhatsApp)
function guardarDatosEnLocalStorage(data) {
  localStorage.setItem("whatsappData", JSON.stringify(data));
}

// Función para obtener el número de teléfono del localStorage (WhatsApp)
function obtenerNumeroTelefonoDelLocalStorage() {
  const data = localStorage.getItem("whatsappData");
  return data ? JSON.parse(data).phoneNumber : null;
}

// Función para obtener el index del servicio del localStorage (WhatsApp)
function obtenerIndexDelServicioDelLocalStorage() {
  const data = localStorage.getItem("whatsappData");
  return data ? JSON.parse(data).service : null;
}

// Función para obtener los datos del localStorage (WhatsApp)
function obtenerDatosDelLocalStorage() {
  const data = localStorage.getItem("whatsappData");
  return data ? JSON.parse(data) : null;
}

function envioDatosWhatsApp(num, indexService) {
  const phone = "51" + num;
  console.log("Enviando... mensajes a WhatsApp para el número:", phone);

  // Función para enviar un mensaje y actualizar el localStorage
  function enviarMensaje(index) {
    sendWsApi(
      mensajesWtsp[parseInt(indexService)][index],
      imagenesWtsp[parseInt(indexService)][index],
      phone
    );
    console.log("Mensaje", index + 1, "enviado.");
    sentMessages.push({
      index,
      time: new Date().getTime(),
    });
    guardarDatosEnLocalStorage({
      phoneNumber: num,
      sentMessages: sentMessages,
      service: indexService,
    });

    // Si se ha enviado el tercer mensaje, eliminar los datos del localStorage
    if (index === 2) {
      console.log(
        "Eliminando localStorage después de enviar todos los mensajes."
      );
      localStorage.removeItem("whatsappData");
    }
  }

  // Función para verificar y enviar el siguiente mensaje
  function enviarSiguienteMensaje() {
    if (messageIndex < mensajesWtsp[0].length) {
      enviarMensaje(messageIndex);
      messageIndex++;
      setTimeout(enviarSiguienteMensaje, intervalos[messageIndex]);
    }
  }

  // Verificar si hay mensajes pendientes en el localStorage y continuar enviándolos
  const storedData = obtenerDatosDelLocalStorage();
  const sentMessages = storedData ? storedData.sentMessages || [] : [];
  let messageIndex = sentMessages.length; // Indica el índice del siguiente mensaje a enviar

  // Si no hay mensajes pendientes, enviar el primer mensaje
  if (messageIndex === 0) {
    enviarSiguienteMensaje();
  } else {
    // Si hay mensajes pendientes, reanudar el envío desde el próximo mensaje
    setTimeout(enviarSiguienteMensaje, intervalos[messageIndex]);
  }
}

function sendWsApi(mensajeWs, imagenWs, phoneWs) {
  const data = {
    message: mensajeWs,
    mediaUrl: imagenWs,
    phone: phoneWs,
  };

  fetch("https://digimediamkt.tech/send-message", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(data),
  })
    .then((response) => {
      if (!response.ok) {
        throw new Error("Hubo un problema al enviar el mensaje.");
      }
      return response;
    })
    .then((response) => {
      console.log("Respuesta del servidor whatsapp:", response);
    })
    .catch((error) => {
      console.error("Error al enviar el mensaje desde API de Whatsapp:", error);
    });
}

const mensajesWtsp = [
  // Desarrollo y Diseño
  [
    `_*¡IMPULSA TU ÉXITO ONLINE CON DIGIMEDIA!*_ 🌐
¿Estás cansado de enfrentar problemas con tu sitio web que afectan el crecimiento de tu negocio?  En Digimedia, no solo creamos sitios web, ¡forjamos plataformas de impacto! 📈.
                        
¿Por qué elegir nuestro servicio de desarrollo web? 🚀
📌Diseño impactante con resultados asombrosos
📌Experiencia del usuario que deja huella
                    
*Estamos emocionados de ser tu socio en tu próximo éxito online. Si estás listo para un desarrollo web que marque la diferencia, ¡contáctanos ahora!*`,

    `*¡FORTALECE TU PRESENCIA EN LÍNEA 💻!*
    
¿Quieres hacer *crecer tus ventas* en el mundo digital? En Digimedia te garantizamos el mejor servicio de diseño y desarrollo web para que puedas potenciarte en el mundo digital con nuestros beneficios exclusivos 🙌🏼:
    
- Aumento de visibilidad y tráfico web.
- Sitios web altamente personalizados con herramientas seguras.`,

    `*¡MAXIMIZA TU PRESENCIA ONLINE!* 💻 
    
*¿Deseas una página más interactiva y didáctica?*🤯 en Digimedia te ayudaremos impulsar tu éxito digital con beneficios exclusivos:
                
1️⃣ Aumento de visibilidad y tráfico web garantizado.
2️⃣ Experiencia del usuario excepcional que convierte visitantes en clientes leales.
                            
¡Construye una plataforma de impacto con nosotros y haz que tu negocio brille en la web!🚀`,
  ],
  // Gestión de Redes Sociales
  [
    `_*¡POTENCIA TU NEGOCIO DIGITAL CON DIGIMEDIA!*_  📈
¿Tus redes sociales no generan interacciones? En DigiMedia, estamos comprometidos en potenciar tu presencia en línea a través de la *gestión de redes sociales*. Al confiarnos la administración de tus plataformas digitales, experimentarás un aumento significativo en la visibilidad y participación de tu marca.                     
        
Nuestros *beneficios exclusivos*:
🚀 Potenciación de tu presencia digital.
🚀 Contenido estratégico y de valor.
                        
*¡Transformemos juntos tu presencia digital! ¡Háznoslo saber!*`,
    `*¡SUMÉRGETE EN EL MUNDO DIGITAL! 📱!*

¿Quieres tener contenido de calidad? Deja la gestión de tus redes sociales en manos expertas con Digimedia y haz crecer tu negocio de la mejor manera con nuestros beneficios exclusivos 📈.
        
- Planificación y organización de contenidos.
- Análisis de resultados con informes mensuales.`,
    `*¡AUMENTA TU PRESENCIA EN LAS REDES Y CONQUISTA NUEVAS AUDIENCIAS CON NOSOTROS! 💻🚀* 

¿Buscas contenido de alto impacto? Confía en los especialistas de Digimedia Marketing para gestionar tus redes sociales y lleva tu negocio al siguiente nivel con nuestro servicio de Gestión Redes Sociales.
        
*✅ Diseño estratégico y calendario de contenido en redes.*
*✅ Análisis de desempeño con reportes mensuales y más!!*`,
  ],
  // Marketing y Gestión Digital
  [
    `_*¡CRECE TU NEGOCIO CON DIGIMEDIA!📈*_  
En DigiMedia Marketing, estamos comprometidos en el mejor desarrollo en *marketing  digital*. Tendremos el placer de armar estrategias que promuevan tu marca a través de diferentes entornos digitales.
        
¿Las estrategias que planteas no logran los objetivos de tu empresa?, entonces adquiere nuestro servicio con *beneficios exclusivos*🙌:
        
📌Mejorar tu visibilidad online
📌Vínculo de lealtad con los clientes 
                    
*¡No te quedes atrás en la era digital y transforma tu marca con soluciones innovadoras! Contáctanos y que comience tu presencia digital.`,
    `*¡INNOVA EN TUS ESTRATEGIAS DIGITALES!*

¿Quieres tener las mejores estrategias online de marketing? 
En Digimedia somos expertos dominando el mundo digital y juntos potenciaremos tu presencia digital. 
        
Con nosotros podrás:
-Vínculo de lealtad con los clientes 
-Desarrollar publicidad en línea`,
    `*¡Aprovecha los beneficios del mundo digital! 👩🏻💻🖥 * 

¿Quieres tener las mejores estrategias de marketing digital? 💻 Obtén mayores ganancias digitalizando tu negocio junto a Digimedia Marketing💰📈. Con el servicio de marketing y gestión digital podrás tener: 
        
✅ Estrategias digitales personalizadas.
✅ Mejor rendimiento de tu presupuesto.
        
Comunícate con nosotros/responde este mensaje para obtener más información y comienza a ver resultados. `,
  ],
  // Branding y Diseño
  [
    `_*¡DESTACA TU NEGOCIO DIGITAL CON DIGIMEDIA!*_ 🙌🏼
¿Sientes que tu negocio no se diferencia del resto? ¡Haz que tu marca sea inolvidable!  
En DigiMedia, estamos preparados para llevar la identidad de tu marca a otro nivel. Somos especialistas en crear *diseños irresistibles y branding* cautivador.
                        
Adquiere nuestros beneficios exclusivos 🚀:               
📌 Diferenciación y Reconocimiento
                        
*Prepárate para darle un giro a tu negocio con todos nuestros beneficios ¡Contacte con nosotros!*`,
    `*¡MARCA LA DIFERENCIA! 😉*

¿Quieres destacar entre tu competencia? Con Digimedia podrás tener una marca sólida gracias a nuestro servicio de Branding y diseño que te ayudarán a ser reconocida entre tus clientes 🚀.
        
- Desarrollo en identidad visual de tu marca
- Originalidad en conceptos de marca`,
    `*¡TEN UNA IDENTIDAD ÚNICA! 😉* 

En Digimedia garantizamos crear experiencias visuales impactante y memorables para que puedas conectar con tu audiencia, nuestro servicio de Branding y diseño que te ayudarán a lograr esto 🚀
        
Nuestros beneficios:
        
- Originalidad en conceptos de marca 
- Construcción de confianza y credibilidad
        
¡Sé parte del mundo digital y potencia tu marca con nosotros! 🙌🏼`,
  ],
];

const imagenesWtsp = [
  // Desarrollo y Diseño
  [
    "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj72Ga0skRjXoSA4lfHicy1rVJ0kd5DcCKq7Tj8LAhtap-6L4lrRsnoD85TRihXDx1OWE3BdIhRz1j5IJEidAzv1du5Ya5VQBLBAxuGEG9xuK6v4gjpP9jB3dA6otzZXV3j1vxXkdvrpto8i2l3HtzNjmaTWaeX_-Mb0G6jGCifbxBt5Jzyr_fEoZgL7xhQ/s16000/flyer-modal-1-1.jpg",
    "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEggZAozhvwXsX_KVF_unYAOXhUspbAuw03Gkouv51yzLaGHdmhzW-0nw63eD99WV7nywIIUBcy75xO2XCWG3KxosXfty7Kr0XUOpWeMXzNYaNhasB4j6sQQogbEsxvlfhrOXSgYmjv67ioEGowFeV2tl6-b568yNZVXvSaqHmZDcwpPb5bwm-MJPXoKvid7/s16000/flyer-modal-1-2.jpg",
    "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhovmlEgV271V1uhTZBHYgNiPVC1wWYQimBUX4cCEs9ozmaVKOQPFT1ZDP5SUs-cnVgttagVS985vwePSAwRRJyFslHtwkY900Ll4aKpjh1wK40CYayhsBqJy4DI_Y1zI9INeQTXwGlfBDGXAlgvMaY-lMMtu5jcRZM2Q_Dcl-CCP8NtAQWuSRGNX2WRHlj/s16000/flyer-modal-1-3.jpg",
  ],
  // Gestión de Redes Sociales
  [
    "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiZTZrnY2A4K0McC6bFqIwChjlYcFsBVjaL-4gVzl87zajaE32egRRBKmIWQ4sfxu3j3MWpvNyXIfbyGpSjw9VS1rFwxMmqREpt0ka-uVimP5wF7o7143ir50K5_AKyJ5ZWvTXKg7_1kh61reKojmQiX6Lr2QkmM6r_1GFPXb2HRGFlYH-SSi5UUEfqOc5S/s16000/flyer-modal-2-1.jpg",
    "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh_C0U0tfOZT92qeRr10AXjBfv2vytcekdRjiS_5lVJWii7PQ8Re6Pmi1sGX8K1FPyLO1KHS2txlW_2QP4AoCXWr6HEE6KEPLZriUVAubZnD-g4TS5PHDxXnOuBDyk06r5hEd0_koX0Wgaz5upF_fp1hAeRGwDkHCLP03dAM8Wf-01GhZ8Xp-KYFCrBuImA/s16000/flyer-modal-2-2.jpg",
    "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgPmzYChZBt2sCjeZTDtVRvTRmss3MS7nt8vbXMDcBZnUCz-fRfXThAla14Vvgg4My4qKQP8CPyj5hfbEMVXihUr931XQB1EsMvG1x81ifR4RE7hDuaYdfO5EfnsqkCrgglyXj4MlPaxyZpmvr8nZ9ZfYled6CqCzrp_tm2UJFL3p9pBbpzTugpMWEDOiSp/s16000/flyer-modal-2-3.jpg",
  ],
  // Marketing y Gestión Digital
  [
    "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg092QZpO6nk2lCpzY4OoufMEqQ4t-4Cd6a2ZzPY1SKNRb40qJeU3dlHEdaFtnZTTZUbX1kbn3TXZ9Z4eVzgJTflVTsQBqZbd2yFnHUTHhtXGzLOm3G7AR5bQVVoGEU8dLJLxSBgLeuFv1YEzy-wtCy2QCUyAoSWRL4Ckc5a9b9XlJ62WmAU_zJG4z4e-Om/s16000/flyer-modal-3-1.jpg",
    "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjtreOOM1Y5NhyImyUSZ2VABJ7cJJz6ZIIV5wU87hCWEo35dY06KfKe6ouLUJpEGXscUfVwdTqom57OkynHHJc5EL0BzSmhnanSTTH6hbgrJRXVpqqQQ1t-QDFBN25m_4SzEeHZQUsdA5gaQlrZFic6yvsFu44lrXDr-8yHgG7qG21q0tEAgvg2a7yXrBDI/s16000/flyer-modal-3-2.jpg",
    "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgvG2owRjMlCU0lJuon4pDZhNj6-VsJIIDoHCFcTWyQAy7srnlkRxXJjoTB6eCQHXauDqLOeJ2VcJ6F6-5SiuoCBLcZvTpfPu3UQcg53yJmdKGaJqa-zJQTYptfztA1bpJgPzGNi_aP2BA2qpZ809flOkxkmA7rxZlE-jI87UhJtc8c2BQnUj_UeoSikvxj/s16000/flyer-modal-3-3.jpg",
  ],
  // Branding y Diseño
  [
    "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiq1Ug8AXStj8VhqjcBk_cptFzr5u1Ue_07ENc-nFqZvyHhuK0VJTxkF5VDs5A7fb5pTUrJFGw5t1WtkHPvXbxxIz5lOM6MUfb6a2XNVlmXpClZ-ujoblAL8tAQgfQyglAisTFmbRB4AVGBP3Mzde0wrNdZD93BjGoBdiP-4ZOlTnHDZ7LVhJqr-ehL73mo/s16000/flyer-modal-4-1.jpg",
    "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh8p8zKOLYq9AULleN9EOvk9PybKHES_p7bpEuGrSEh90q7ubLAAVKYPjPtQF2aBMoSQK2V1MiO9tNV32jSViZfdkJDTRE9B1i5uND7NCj79Cnm8rRJ1xl5FSIED85E_D2I5gLUiX0mxosKJJdEUheiacMsjPXKEV8M8A7G8pT8plpPsCrfv4OkygHLLMNw/s16000/flyer-modal-4-2.jpg",
    "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgU0x4yrurrYawAgqDVER5cePp69tExxF5JtYRKNWxFXPaAcKdZE-bMoiIZtfMDhM97R9U4MPELvxub8iHeTulwSx2ClJpz4MKd6URFHl_Cz0I4QnfoF-3Is1ZR4nZz9YrTdEyAxO19F4rI6Ft9gtIPhKuBfHqnvwCcffQYCn_zItT_sbfB-y4_t1_ThQyK/s16000/flyer-modal-4-3.jpg",
  ],
];

// AL RECARGAR LA PAGINA
// Llamar a la función para enviar los mensajes de WhatsApp cuando se cargue la página
window.onload = function () {
  // PARA WHATSAPP
  // Obtener el número de teléfono del formulario desde el LocalStorage
  const storedPhoneNumber = obtenerNumeroTelefonoDelLocalStorage();
  // Obtener elindex del servicio del formulario desde el LocalStorage
  const storedIndexService = obtenerIndexDelServicioDelLocalStorage();
  // Verificar si se recuperó un número de teléfono válido desde el LocalStorage
  const storedData = obtenerDatosDelLocalStorage();
  const sentMessages = storedData ? storedData.sentMessages || [] : [];
  if (storedData && sentMessages.length < 3) {
    // Llamar a la función para enviar los mensajes de WhatsApp con el número recuperado
    envioDatosWhatsApp(storedPhoneNumber, storedIndexService);
  } else {
    console.log(
      "Número de teléfono no válido o ya se han enviado los mensajes."
    );
  }

  // PARA CORREO
  // Obtener el correo del formulario desde el LocalStorage (correo)
  const storedEmail = obtenerCorreoDelLocalStorage();
  // Obtener elindex del servicio del formulario desde el LocalStorage (correo)
  const storedIndexServiceEmail =
    obtenerIndexDelServicioDelLocalStorageCorreo();
  // Verificar si se recuperó un número de teléfono válido desde el LocalStorage
  const storedDataEmail = obtenerDatosDelLocalStorageCorreo();
  const sentMessagesEmail = storedDataEmail
    ? storedDataEmail.sentMessages || []
    : [];
  if (storedDataEmail && sentMessagesEmail.length < 3) {
    // Llamar a la función para enviar los mensajes de WhatsApp con el número recuperado
    enviarDatosCorreo(storedEmail, storedIndexServiceEmail);
  } else {
    console.log("Correo no válido o ya se han enviado los mensajes.");
  }
};
