
<?php

if (isset($_POST["enviar"])) {
    $Nombres  = $_POST['full_name'];
    $career  = $_POST['career'];
    $gender  = $_POST['gender'];
    $birthday  = $_POST['birthday'];
    $Telefono= $_POST['telephone'];
    $Email   = $_POST['email'];
    $distrito   = $_POST['district'];
    $filetemp =$_FILES['cv']['tmp_name'];
    $filename =$_FILES['cv']['name'];

    if ($Nombres=='' || $Email=='' || $Telefono=='' || !is_numeric($Telefono) || strlen($Telefono)<=8 || strlen($Telefono)>=10 || $career==''){ 
        echo "<script>
            alert('Todos los campos no han sido rellenados o datos erroneos.');location.href ='javascript:history.back()';</script>";

    }else{
        require '../public/mailer/PHPMailerAutoload.php';
        require '../public/mailer/class.phpmailer.php';
        require '../public/mailer/class.smtp.php';
        
        $mail = new PHPMailer();
        $mail->setFrom($Email,$Nombres);
        $mail->addAddress('ventasneonhouse@gmail.com'); //correo a la que le llegaran los correos 
        $mail->addReplyTo($Email,$Nombres);
    
        // Aqu¨ª van los datos que apareceran en el correo que reciba  
        $mail->WordWrap = 50; 
        $mail->IsHTML(true);      
        $mail->Subject='Solicitud de Empleo '.$Nombres;
        $mail->Body="Nombre: ". $Nombres . ".<br>
                    Carrera: ". $career . ".<br>
                    Genero: ". $gender . ".<br>
                    Cumpleano: ". $birthday . ".<br>
                    Telefono: ". $Telefono . ".<br>
                    Correo: ". $Email .".<br>
                    Distrito: ". $distrito."<br><br>
                    <strong>Mensaje del Desarrollador</strong>: Click al boton ''Responder'' para escribir un mensaje a ". $Email.".";
        $mail->addAttachment($filetemp, $filename);


        // Datos del servidor SMTP
        $mail->IsSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "mail.neonhouseled.com"; //servidor smtp, esto lo puedes dejar igual
        $mail->Port = 465; //puerto smtp de gmail, tambien lo puedes dejar igual
        $mail->Username = 'postula@neonhouseled.com';  // en local, tu correo gmail // en servidor, nombre usuario
        $mail->Password = 'n37qO#Ua7Dl%'; // en local, tu contrasena gmail //en servidor, contraseña de usuario
        
        
        if ($mail->Send())
        //echo "<script>swal('Formulario enviado exitosamente', 'le responderemos lo mas pronto posible.','success');window.location.href='../index.php';</script>";
        echo "<script>alert('Formulario enviado exitosamente, le responderemos lo mas pronto posible.');window.location.href='https://www.neonhouseled.com/index.php';</script>";
        else
        echo "<script>alert('Error al enviar el formulario');location.href ='javascript:history.back()';</script>";

    }
}
?>


