<?php
//obtener los datos del post
$nombre = $_POST['nombre'];
$telefono = $_POST['telf'];
$email = $_POST['correo'];
$servicio = $_POST['servicio'];
//procesar numero
$telefono = str_replace(" ", "", $telefono);
//agregarle el +51 al inicio
$telefono = "+51" . $telefono;
//crear el mensaje
$mensajealusuario = "Hola " . $nombre . ", aqui tienes la información que solicitaste para el servicio de: " . $servicio;
//switch para determinar el link segun el producto
$linkimagen = "";
switch ($servicio) {
    case 'Sellador de Botellas':
        $linkimagen = "";
        break;
    case 'Máquina de embalaje':
        $linkimagen = "";
        break;
    case 'Sellador de vasos':
        $linkimagen = "";
        break;
    case 'Selladora de bolsas':
        $linkimagen = "";
        break;
    case 'Soldadora LINGBA 5':
        $linkimagen = "";
        break;
    case 'Soldadora SPARK 3':
        $linkimagen = "";
        break;
    case 'Panel de Fibra de Bambo':
        $linkimagen = "";
        break;
    case 'Maquina de Concreto':
        $linkimagen = "https://i.ibb.co/68YwTzY/Flyer-Mezcladora-de-Concreto.webp";
        break;
    default:
        $linkimagen = "https://file-example.s3-accelerate.amazonaws.com/images/test.jpg";
        break;
}

//enviar el mensaje
$params = array(
    'token' => 'b4nfkrt6qv0xrrpx',
    'to' => $telefono,
    'image' => $linkimagen,
    'caption' => $mensajealusuario,
);
$curl = curl_init();
curl_setopt_array(
    $curl,
    array(
        CURLOPT_URL => "https://api.ultramsg.com/instance72853/messages/image",
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
    )
);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
?>