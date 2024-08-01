const intervalos = [0, 300000, 500000];
function guardarDatosEnLocalStorageCorreo(e) {
  localStorage.setItem("correoData", JSON.stringify(e));
}
function obtenerCorreoDelLocalStorage() {
  let e = localStorage.getItem("correoData");
  return e ? JSON.parse(e).correo : null;
}
function obtenerDatosDelLocalStorageCorreo() {
  let e = localStorage.getItem("correoData");
  return e ? JSON.parse(e) : null;
}
function obtenerIndexDelServicioDelLocalStorageCorreo() {
  let e = localStorage.getItem("correoData");
  return e ? JSON.parse(e).service : null;
}
function enviarDatosCorreo(e, o) {
  console.log("Enviando... mensajes a correo para la direcci\xf3n:", e);
  let a = obtenerDatosDelLocalStorageCorreo(),
    s = (a && a.sentMessages) || [],
    t = s.length;
  function r() {
    if (t < 3) {
      var a;
      enviarEmailAjax(e, (a = t), o),
        s.push({ index: a, time: new Date().getTime() }),
        guardarDatosEnLocalStorageCorreo({
          correo: e,
          sentMessages: s,
          service: o,
        }),
        2 === a &&
          (console.log(
            "Eliminando localStorage despu\xe9s de enviar todos los mensajes de correo."
          ),
          localStorage.removeItem("correoData")),
        setTimeout(r, intervalos[++t]);
    }
  }
  0 === t ? r() : setTimeout(r, intervalos[t]);
}
function enviarEmailAjax(e, o, a) {
  let s = new FormData(),
    t = e;
  s.append("id_servicio", a),
    s.append("index", o),
    null === obtenerDatosDelLocalStorageCorreo()
      ? (s.append("email", t), console.log("Email:", t))
      : (s.append("email", obtenerDatosDelLocalStorageCorreo().correo),
        console.log("Email:", obtenerDatosDelLocalStorageCorreo().correo)),
    fetch("./public/message/Controller/process.php", {
      method: "POST",
      body: s,
    })
      .then((e) => e.text())
      .then((e) => {
        console.log("Respuesta del servidor Gmail Es:", e);
      })
      .catch((e) => {
        console.error("Error al enviar formulario a Gmail:", e),
          alert("Email no Enviado: ", e);
      });
}
function guardarDatosEnLocalStorage(e) {
  localStorage.setItem("whatsappData", JSON.stringify(e));
}
function obtenerNumeroTelefonoDelLocalStorage() {
  let e = localStorage.getItem("whatsappData");
  return e ? JSON.parse(e).phoneNumber : null;
}
function obtenerIndexDelServicioDelLocalStorage() {
  let e = localStorage.getItem("whatsappData");
  return e ? JSON.parse(e).service : null;
}
function obtenerDatosDelLocalStorage() {
  let e = localStorage.getItem("whatsappData");
  return e ? JSON.parse(e) : null;
}
function envioDatosWhatsApp(e, o) {
  let a = "51" + e;
  function s() {
    if (n < mensajesWtsp[0].length) {
      var t;
      (t = n),
        sendWsApi(
          mensajesWtsp[parseInt(o)][t],
          imagenesWtsp[parseInt(o)][t],
          a
        ),
        console.log("Mensaje", t + 1, "enviado."),
        r.push({ index: t, time: new Date().getTime() }),
        guardarDatosEnLocalStorage({
          phoneNumber: e,
          sentMessages: r,
          service: o,
        }),
        2 === t &&
          (console.log(
            "Eliminando localStorage despu\xe9s de enviar todos los mensajes."
          ),
          localStorage.removeItem("whatsappData")),
        setTimeout(s, intervalos[++n]);
    }
  }
  console.log("Enviando... mensajes a WhatsApp para el n\xfamero:", a);
  let t = obtenerDatosDelLocalStorage(),
    r = (t && t.sentMessages) || [],
    n = r.length;
  0 === n ? s() : setTimeout(s, intervalos[n]);
}
function sendWsApi(e, o, a) {
  fetch("https://digimediamkt.tech/send-message", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ message: e, mediaUrl: o, phone: a }),
  })
    .then((e) => {
      if (!e.ok) throw Error("Hubo un problema al enviar el mensaje.");
      return e;
    })
    .then((e) => {
      console.log("Respuesta del servidor whatsapp:", e);
    })
    .catch((e) => {
      console.error("Error al enviar el mensaje desde API de Whatsapp:", e);
    });
}
const mensajesWtsp = [
    [
      `_*\xa1IMPULSA TU \xc9XITO ONLINE CON DIGIMEDIA!*_ 🌐
\xbfEst\xe1s cansado de enfrentar problemas con tu sitio web que afectan el crecimiento de tu negocio?  En Digimedia, no solo creamos sitios web, \xa1forjamos plataformas de impacto! 📈.
                        
\xbfPor qu\xe9 elegir nuestro servicio de desarrollo web? 🚀
📌Dise\xf1o impactante con resultados asombrosos
📌Experiencia del usuario que deja huella
                    
*Estamos emocionados de ser tu socio en tu pr\xf3ximo \xe9xito online. Si est\xe1s listo para un desarrollo web que marque la diferencia, \xa1cont\xe1ctanos ahora!*`,
      `*\xa1FORTALECE TU PRESENCIA EN L\xcdNEA 💻!*
    
\xbfQuieres hacer *crecer tus ventas* en el mundo digital? En Digimedia te garantizamos el mejor servicio de dise\xf1o y desarrollo web para que puedas potenciarte en el mundo digital con nuestros beneficios exclusivos 🙌🏼:
    
- Aumento de visibilidad y tr\xe1fico web.
- Sitios web altamente personalizados con herramientas seguras.`,
      `*\xa1MAXIMIZA TU PRESENCIA ONLINE!* 💻 
    
*\xbfDeseas una p\xe1gina m\xe1s interactiva y did\xe1ctica?*🤯 en Digimedia te ayudaremos impulsar tu \xe9xito digital con beneficios exclusivos:
                
1️⃣ Aumento de visibilidad y tr\xe1fico web garantizado.
2️⃣ Experiencia del usuario excepcional que convierte visitantes en clientes leales.
                            
\xa1Construye una plataforma de impacto con nosotros y haz que tu negocio brille en la web!🚀`,
    ],
    [
      `_*\xa1POTENCIA TU NEGOCIO DIGITAL CON DIGIMEDIA!*_  📈
\xbfTus redes sociales no generan interacciones? En DigiMedia, estamos comprometidos en potenciar tu presencia en l\xednea a trav\xe9s de la *gesti\xf3n de redes sociales*. Al confiarnos la administraci\xf3n de tus plataformas digitales, experimentar\xe1s un aumento significativo en la visibilidad y participaci\xf3n de tu marca.                     
        
Nuestros *beneficios exclusivos*:
🚀 Potenciaci\xf3n de tu presencia digital.
🚀 Contenido estrat\xe9gico y de valor.
                        
*\xa1Transformemos juntos tu presencia digital! \xa1H\xe1znoslo saber!*`,
      `*\xa1SUM\xc9RGETE EN EL MUNDO DIGITAL! 📱!*

\xbfQuieres tener contenido de calidad? Deja la gesti\xf3n de tus redes sociales en manos expertas con Digimedia y haz crecer tu negocio de la mejor manera con nuestros beneficios exclusivos 📈.
        
- Planificaci\xf3n y organizaci\xf3n de contenidos.
- An\xe1lisis de resultados con informes mensuales.`,
      `*\xa1AUMENTA TU PRESENCIA EN LAS REDES Y CONQUISTA NUEVAS AUDIENCIAS CON NOSOTROS! 💻🚀* 

\xbfBuscas contenido de alto impacto? Conf\xeda en los especialistas de Digimedia Marketing para gestionar tus redes sociales y lleva tu negocio al siguiente nivel con nuestro servicio de Gesti\xf3n Redes Sociales.
        
*✅ Dise\xf1o estrat\xe9gico y calendario de contenido en redes.*
*✅ An\xe1lisis de desempe\xf1o con reportes mensuales y m\xe1s!!*`,
    ],
    [
      `_*\xa1CRECE TU NEGOCIO CON DIGIMEDIA!📈*_  
En DigiMedia Marketing, estamos comprometidos en el mejor desarrollo en *marketing  digital*. Tendremos el placer de armar estrategias que promuevan tu marca a trav\xe9s de diferentes entornos digitales.
        
\xbfLas estrategias que planteas no logran los objetivos de tu empresa?, entonces adquiere nuestro servicio con *beneficios exclusivos*🙌:
        
📌Mejorar tu visibilidad online
📌V\xednculo de lealtad con los clientes 
                    
*\xa1No te quedes atr\xe1s en la era digital y transforma tu marca con soluciones innovadoras! Cont\xe1ctanos y que comience tu presencia digital.`,
      `*\xa1INNOVA EN TUS ESTRATEGIAS DIGITALES!*

\xbfQuieres tener las mejores estrategias online de marketing? 
En Digimedia somos expertos dominando el mundo digital y juntos potenciaremos tu presencia digital. 
        
Con nosotros podr\xe1s:
-V\xednculo de lealtad con los clientes 
-Desarrollar publicidad en l\xednea`,
      `*\xa1Aprovecha los beneficios del mundo digital! 👩🏻💻🖥 * 

\xbfQuieres tener las mejores estrategias de marketing digital? 💻 Obt\xe9n mayores ganancias digitalizando tu negocio junto a Digimedia Marketing💰📈. Con el servicio de marketing y gesti\xf3n digital podr\xe1s tener: 
        
✅ Estrategias digitales personalizadas.
✅ Mejor rendimiento de tu presupuesto.
        
Comun\xedcate con nosotros/responde este mensaje para obtener m\xe1s informaci\xf3n y comienza a ver resultados. `,
    ],
    [
      `_*\xa1DESTACA TU NEGOCIO DIGITAL CON DIGIMEDIA!*_ 🙌🏼
\xbfSientes que tu negocio no se diferencia del resto? \xa1Haz que tu marca sea inolvidable!  
En DigiMedia, estamos preparados para llevar la identidad de tu marca a otro nivel. Somos especialistas en crear *dise\xf1os irresistibles y branding* cautivador.
                        
Adquiere nuestros beneficios exclusivos 🚀:               
📌 Diferenciaci\xf3n y Reconocimiento
                        
*Prep\xe1rate para darle un giro a tu negocio con todos nuestros beneficios \xa1Contacte con nosotros!*`,
      `*\xa1MARCA LA DIFERENCIA! 😉*

\xbfQuieres destacar entre tu competencia? Con Digimedia podr\xe1s tener una marca s\xf3lida gracias a nuestro servicio de Branding y dise\xf1o que te ayudar\xe1n a ser reconocida entre tus clientes 🚀.
        
- Desarrollo en identidad visual de tu marca
- Originalidad en conceptos de marca`,
      `*\xa1TEN UNA IDENTIDAD \xdaNICA! 😉* 

En Digimedia garantizamos crear experiencias visuales impactante y memorables para que puedas conectar con tu audiencia, nuestro servicio de Branding y dise\xf1o que te ayudar\xe1n a lograr esto 🚀
        
Nuestros beneficios:
        
- Originalidad en conceptos de marca 
- Construcci\xf3n de confianza y credibilidad
        
\xa1S\xe9 parte del mundo digital y potencia tu marca con nosotros! 🙌🏼`,
    ],
  ],
  imagenesWtsp = [
    [
      "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEj72Ga0skRjXoSA4lfHicy1rVJ0kd5DcCKq7Tj8LAhtap-6L4lrRsnoD85TRihXDx1OWE3BdIhRz1j5IJEidAzv1du5Ya5VQBLBAxuGEG9xuK6v4gjpP9jB3dA6otzZXV3j1vxXkdvrpto8i2l3HtzNjmaTWaeX_-Mb0G6jGCifbxBt5Jzyr_fEoZgL7xhQ/s16000/flyer-modal-1-1.jpg",
      "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEggZAozhvwXsX_KVF_unYAOXhUspbAuw03Gkouv51yzLaGHdmhzW-0nw63eD99WV7nywIIUBcy75xO2XCWG3KxosXfty7Kr0XUOpWeMXzNYaNhasB4j6sQQogbEsxvlfhrOXSgYmjv67ioEGowFeV2tl6-b568yNZVXvSaqHmZDcwpPb5bwm-MJPXoKvid7/s16000/flyer-modal-1-2.jpg",
      "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhovmlEgV271V1uhTZBHYgNiPVC1wWYQimBUX4cCEs9ozmaVKOQPFT1ZDP5SUs-cnVgttagVS985vwePSAwRRJyFslHtwkY900Ll4aKpjh1wK40CYayhsBqJy4DI_Y1zI9INeQTXwGlfBDGXAlgvMaY-lMMtu5jcRZM2Q_Dcl-CCP8NtAQWuSRGNX2WRHlj/s16000/flyer-modal-1-3.jpg",
    ],
    [
      "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiZTZrnY2A4K0McC6bFqIwChjlYcFsBVjaL-4gVzl87zajaE32egRRBKmIWQ4sfxu3j3MWpvNyXIfbyGpSjw9VS1rFwxMmqREpt0ka-uVimP5wF7o7143ir50K5_AKyJ5ZWvTXKg7_1kh61reKojmQiX6Lr2QkmM6r_1GFPXb2HRGFlYH-SSi5UUEfqOc5S/s16000/flyer-modal-2-1.jpg",
      "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh_C0U0tfOZT92qeRr10AXjBfv2vytcekdRjiS_5lVJWii7PQ8Re6Pmi1sGX8K1FPyLO1KHS2txlW_2QP4AoCXWr6HEE6KEPLZriUVAubZnD-g4TS5PHDxXnOuBDyk06r5hEd0_koX0Wgaz5upF_fp1hAeRGwDkHCLP03dAM8Wf-01GhZ8Xp-KYFCrBuImA/s16000/flyer-modal-2-2.jpg",
      "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgPmzYChZBt2sCjeZTDtVRvTRmss3MS7nt8vbXMDcBZnUCz-fRfXThAla14Vvgg4My4qKQP8CPyj5hfbEMVXihUr931XQB1EsMvG1x81ifR4RE7hDuaYdfO5EfnsqkCrgglyXj4MlPaxyZpmvr8nZ9ZfYled6CqCzrp_tm2UJFL3p9pBbpzTugpMWEDOiSp/s16000/flyer-modal-2-3.jpg",
    ],
    [
      "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg092QZpO6nk2lCpzY4OoufMEqQ4t-4Cd6a2ZzPY1SKNRb40qJeU3dlHEdaFtnZTTZUbX1kbn3TXZ9Z4eVzgJTflVTsQBqZbd2yFnHUTHhtXGzLOm3G7AR5bQVVoGEU8dLJLxSBgLeuFv1YEzy-wtCy2QCUyAoSWRL4Ckc5a9b9XlJ62WmAU_zJG4z4e-Om/s16000/flyer-modal-3-1.jpg",
      "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjtreOOM1Y5NhyImyUSZ2VABJ7cJJz6ZIIV5wU87hCWEo35dY06KfKe6ouLUJpEGXscUfVwdTqom57OkynHHJc5EL0BzSmhnanSTTH6hbgrJRXVpqqQQ1t-QDFBN25m_4SzEeHZQUsdA5gaQlrZFic6yvsFu44lrXDr-8yHgG7qG21q0tEAgvg2a7yXrBDI/s16000/flyer-modal-3-2.jpg",
      "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgvG2owRjMlCU0lJuon4pDZhNj6-VsJIIDoHCFcTWyQAy7srnlkRxXJjoTB6eCQHXauDqLOeJ2VcJ6F6-5SiuoCBLcZvTpfPu3UQcg53yJmdKGaJqa-zJQTYptfztA1bpJgPzGNi_aP2BA2qpZ809flOkxkmA7rxZlE-jI87UhJtc8c2BQnUj_UeoSikvxj/s16000/flyer-modal-3-3.jpg",
    ],
    [
      "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiq1Ug8AXStj8VhqjcBk_cptFzr5u1Ue_07ENc-nFqZvyHhuK0VJTxkF5VDs5A7fb5pTUrJFGw5t1WtkHPvXbxxIz5lOM6MUfb6a2XNVlmXpClZ-ujoblAL8tAQgfQyglAisTFmbRB4AVGBP3Mzde0wrNdZD93BjGoBdiP-4ZOlTnHDZ7LVhJqr-ehL73mo/s16000/flyer-modal-4-1.jpg",
      "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh8p8zKOLYq9AULleN9EOvk9PybKHES_p7bpEuGrSEh90q7ubLAAVKYPjPtQF2aBMoSQK2V1MiO9tNV32jSViZfdkJDTRE9B1i5uND7NCj79Cnm8rRJ1xl5FSIED85E_D2I5gLUiX0mxosKJJdEUheiacMsjPXKEV8M8A7G8pT8plpPsCrfv4OkygHLLMNw/s16000/flyer-modal-4-2.jpg",
      "https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgU0x4yrurrYawAgqDVER5cePp69tExxF5JtYRKNWxFXPaAcKdZE-bMoiIZtfMDhM97R9U4MPELvxub8iHeTulwSx2ClJpz4MKd6URFHl_Cz0I4QnfoF-3Is1ZR4nZz9YrTdEyAxO19F4rI6Ft9gtIPhKuBfHqnvwCcffQYCn_zItT_sbfB-y4_t1_ThQyK/s16000/flyer-modal-4-3.jpg",
    ],
  ];
window.onload = function () {
  let e = obtenerNumeroTelefonoDelLocalStorage(),
    o = obtenerIndexDelServicioDelLocalStorage(),
    a = obtenerDatosDelLocalStorage(),
    s = (a && a.sentMessages) || [];
  a && s.length < 3
    ? envioDatosWhatsApp(e, o)
    : console.log(
        "N\xfamero de tel\xe9fono no v\xe1lido o ya se han enviado los mensajes."
      );
  let t = obtenerCorreoDelLocalStorage(),
    r = obtenerIndexDelServicioDelLocalStorageCorreo(),
    n = obtenerDatosDelLocalStorageCorreo(),
    i = (n && n.sentMessages) || [];
  n && i.length < 3
    ? enviarDatosCorreo(t, r)
    : console.log("Correo no v\xe1lido o ya se han enviado los mensajes.");
};
