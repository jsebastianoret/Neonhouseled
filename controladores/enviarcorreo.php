
<?php
$res= ["msg"=>"¡Ocurrio un error inesperado!","type"=>"error"];

if (isset($_POST["full_name"]) && isset($_POST['email']) && isset($_POST['telephone']) && isset($_POST['career'])) {
    $Nombres  = $_POST['full_name'];
    $Email   = $_POST['email'];
    $Interesed_in = $_POST['interesed_service'];
    $Telefono= $_POST['telephone'];
    $Mensaje = $_POST['career'];
    //$Mensaje = $_POST['mensaje'];

    if ($Nombres=='' || $Email=='' || $Telefono=='' || !is_numeric($Telefono) || strlen($Telefono)!=9  || $Mensaje==''){ 
        $res['msg']="Datos erróneos, porfavor vuelva a llenar los campos";

    }else{
        require '../public/mailer/PHPMailerAutoload.php';
        require '../public/mailer/class.phpmailer.php';
        require '../public/mailer/class.smtp.php';
        
        $mail = new PHPMailer();
        $mail->setFrom($Email,$Nombres);
        $mail->addAddress('ventasneonhouse@gmail.com
        '); //ventasneonhouse@  correo a la que le llegaran los correos 
        $mail->addReplyTo($Email,$Nombres);
    
        // Aqu¨ª van los datos que apareceran en el correo que reciba  
        $mail->WordWrap = 50; 
        $mail->IsHTML(true);      
        $mail->Subject='Enviado por '.$Nombres;
        $mail->Body="Nombre: ". $Nombres . ".<br>
                    Telefono: ". $Telefono . ".<br>
                    Correo: ". $Email .".<br>
                    Interesado en:". $Interesed_in .".<br> 
                    Mensaje: ". $Mensaje."<br><br>
                    <strong>Mensaje del Desarrollador</strong>: Click al boton ''Responder'' para escribir un mensaje a ". $Email.".";

        // Datos del servidor SMTP
        $mail->IsSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "mail.neonhouseled.com"; //servidor smtp, esto lo puedes dejar igual
        $mail->Port = 465; //puerto smtp de gmail, tambien lo puedes dejar igual
        $mail->Username = 'postula@neonhouseled.com';  // en local, tu correo gmail // en servidor, nombre usuario
        $mail->Password = 'n37qO#Ua7Dl%'; // en local, tu contrasena gmail //en servidor, contraseña de usuario
        
        if ($mail->Send()){
        $res['msg'] = "¡Muchas gracias por contactarnos!";
        $res['type'] = "success";
        }else{
            $res['msg'] = "¡Ocurrió un error inesperado!";
        }
    }
    echo json_encode($res);
}else{
    echo json_encode($res);
}
?>
