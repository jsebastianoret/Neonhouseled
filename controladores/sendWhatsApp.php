<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $telefono = $_POST["phone"];
    $categoria=strtolower($_POST["categoria"]);

      //parametros que te da ultramsg
      //crear cuenta
    $params = array(
        'token' => 'qnu43pihdrv0z0z2',
        'to' => '+51'.$telefono,
        'body' => "*Hola, somos la empresa NeonHouseLED.*\n\n" .
              "Le escribimos porque ha completado nuestro formulario y vemos que quiere diseñar o darle un espíritu nuevo a su ".$categoria.". ¿Podemos agendar una llamada o reunión para discutir más detalles?\n\n" .
              "Quedamos a la espera de su respuesta. ¡Gracias!"
    );
    
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.ultramsg.com/instance88492/messages/chat",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_SSL_VERIFYHOST => 0,
      CURLOPT_SSL_VERIFYPEER => 0,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => http_build_query($params),
      CURLOPT_HTTPHEADER => array(
        "content-type: application/x-www-form-urlencoded"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
}
?>
