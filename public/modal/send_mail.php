<?php
    $correo = $_GET['correo'];
    $comentario = $_POST['respuesta'];
    
    date_default_timezone_set("America/Santiago");
    $fecha = date("Y-m-d G:i:s");
    
    use PHPMailer\PHPMailer\PHPMailer;
    require 'vendor/autoload.php';
    
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = gethostname();
    $mail->SMTPAuth = true;
    $mail->Username = 'infer@artistichat.com';
    $mail->Password = '5gJ2iu$9';
    $mail->setFrom('infer@artistichat.com');
    $mail->addAddress($correo);
    $mail->Subject = 'FROM: infer@artistichat.com DATE:'.$fecha;
    $mail->Body    = $comentario;
    $mail->send();

    echo '<script language="JavaScript">alert("Mensaje Enviado exitosamente");</script>';
    echo "<script>window.open('../auto-consulta.php','_self')</script>";

?>