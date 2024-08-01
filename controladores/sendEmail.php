<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../public/PHPMailer/src/Exception.php';
require '../public/PHPMailer/src/PHPMailer.php';
require '../public/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $categoria = strtolower($_POST["categoria"]);

    $mail = new PHPMailer(true);
    
    try {
        // Configuración del servidor SMTP y credenciales
        $mail->isSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ventasneonhouse@gmail.com';
        $mail->Password = 'zthu qang iemw knql'; //NECESITO LA CLAVE
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Configuración del remitente y destinatario
        $mail->setFrom('ventasneonhouse@gmail.com');
        $mail->addAddress($email);

        // Configuración del contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'comunicacion';
        $mail->Body = '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">
    <title></title>
    <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]-->
    <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
    <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]-->
</head>

<body>
    <div dir="ltr" class="es-wrapper-color">
        <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#ffffff"></v:fill>
			</v:background>
		<![endif]-->
        <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td class="esd-email-paddings" valign="top">
                        <table cellpadding="0" cellspacing="0" class="es-content esd-header-popover" align="center">
                            <tbody>
                                <tr>
                                    <td class="es-adaptive esd-stripe" style="background-color: #f7f7f7;" esd-custom-block-id="8428" bgcolor="#f7f7f7" align="center">
                                        
                        <table class="es-header" align="center" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td class="es-adaptive esd-stripe" esd-custom-block-id="8429" align="center">
                                        <table class="es-header-body" align="center" width="600" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p25t es-p10b es-p20r es-p20l" align="left">
                                                        <!--[if mso]><table width="560" cellpadding="0"
                            cellspacing="0"><tr><td width="205" valign="top"><![endif]-->
                                                        
                                                        <!--[if mso]></td><td width="10"></td><td width="345" valign="top"><![endif]-->
                                                            <tr class="links  align="center" style="padding-right: 1rem;">
                                                                <h1>Neon House Led</h1>
                                                            </tr>
                                                        <!--[if mso]></td></tr></table><![endif]-->
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="es-content" align="center" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table class="es-content-body" align="center" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p20t" esd-custom-block-id="8430" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" align="center" width="600" valign="top">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-image es-p20r es-p20l" align="center" style="font-size:0"><img src="https://i.ibb.co/3d14QBd/Semana-13-Gesti-n-removebg-preview.png" alt="Semana-13-Gesti-n-removebg-preview" border="0"></td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="es-content" align="center" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table class="es-content-body" style="border-left:1px solid transparent;border-right:1px solid transparent;border-top:1px solid transparent;border-bottom:1px solid transparent;" align="center" width="600" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p20t es-p40b es-p40r es-p40l" esd-custom-block-id="8537" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" align="left" width="518">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-image es-m-txt-c es-p5b" align="center" style="font-size:0"><a target="_blank"><img src="https://tlr.stripocdn.email/content/guids/CABINET_3b108160279226d19ea952ffd5948152/images/92241523451206218.png" alt="icon" style="display: block;" title="icon" width="30"></a></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="esd-block-text es-m-txt-c" align="center">
                                                                                        <h2>Hola!<br></h2>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="esd-block-text es-m-txt-c es-p15t" align="center">
                                                                                        <p>Hemos recibido tu interés en diseñar tu '.$categoria.'.Nos pondremos en contacto contigo por WhatsApp en breve. Si no recibes nuestra respuesta, por favor responde este mensaje o llama al <span style="color: #3982b8;">+51 954368018</span> para asistencia inmediata.</p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" class="es-footer" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" esd-custom-block-id="8442" style="background-color: #f7f7f7;" bgcolor="#f7f7f7" align="center">
                                        <table class="es-footer-body" width="600" cellspacing="0" cellpadding="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p20t es-p20b es-p20r es-p20l" esd-general-paddings-checked="false" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" width="560" valign="top" align="center">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-text es-p5b" align="center">
                                                                                        <h3 style="line-height: 150%;">Conéctate con nosotros</h3>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="esd-block-social es-p10t es-p10b" align="center" style="font-size:0">
                                                                                        <table class="es-table-not-adapt es-social" cellspacing="0" cellpadding="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td class="es-p20r" valign="top" align="center"><a href="https://www.facebook.com/nhldecoracioncomercial"><img title="Facebook" src="https://tlr.stripocdn.email/content/assets/img/social-icons/logo-black/facebook-logo-black.png" alt="Fb" width="32" height="32"></a></td>
                                                                                                    <td class="es-p20r" valign="top" align="center"><a href="https://www.youtube.com/user/NEONHOUSELEDS"><img title="Youtube" src="https://tlr.stripocdn.email/content/assets/img/social-icons/logo-black/youtube-logo-black.png" alt="Yt" width="32" height="32"></a></td>
                                                                                                    <td valign="top" align="center"><a href="https://twitter.com/NEONHOUSELEDS" target="_blank"><img title="Twitter" src="https://tlr.stripocdn.email/content/assets/img/social-icons/logo-black/twitter-logo-black.png" alt="Tw" width="32" height="32"></a></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td align="center" class="esd-block-text es-p10t es-p10b">
                                                                                        <p style="line-height: 150%;">Estás recibiendo este correo porque has mostrado interés en conocernos o adquirir nuestros servicios. Puedes visitar nuestra página para más información : <a target="_blank" style="line-height: 150%;" href="https://www.neonhouseled.com/">!Vísitanos¡</a></p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="esd-block-text es-p10t es-p10b" align="center">
                                                                                        <p>© 2024<br></p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="position: absolute; left: -9999px; top: -9999px; margin: 0px;"></div>
</body>

</html>'; // Aquí va el contenido HTML del correo

        // Enviar el correo
        $mail->send();
        echo "Correo enviado exitosamente";
    } catch (Exception $e) {
        http_response_code(500);
        error_log("Error al enviar el correo: {$mail->ErrorInfo}");
        echo "Error al enviar el correo: {$mail->ErrorInfo}";
    }
}
?>
