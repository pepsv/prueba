<?php

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//comprobamos que se haya enviado el PDF
if (!isset($_FILES['pdf'])) {
    echo "No se envio el PDF";
    die();
}
   
//recibimos archivo PDF y lo guardamos en la variable pdf
$pdf = $_FILES['pdf']['tmp_name'];

//creamos un objeto de PHPMailer, libreria para poder enviar un correo electronico
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();   //habilitamos SMTP                                        
    $mail->Host       = 'mail.maximumspeedtransportation.com'; //aqui el servidor de correo
    $mail->SMTPAuth   = true; // habilitar autenticacion                                
    $mail->Username   = 'prueba@maximumspeedtransportation.com'; // usuario
    $mail->Password   = 'YVPaV9RD7EkY'; // contraseña del usuario                      
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //habilitar SSL    
    $mail->Port       = 465;  //puerto de salida SMTP                     

    //desde
    $mail->setFrom('prueba@maximumspeedtransportation.com', 'maximumspeedtransportation');
    
    //para, poner el correo a quien quiere enviarle el PDF
    $mail->addAddress('bloqgeek@gmail.com');

    /*adjuntar el archivo PDF que esta guardado en la variable pdf y damos el nombre
    reporte.pdf pero el nombre puede ser cualquiera que le quiera poner*/
    $mail->addAttachment($pdf, 'reporte.pdf');

    //habilitar html para el correo
    $mail->isHTML(true);
    //aqui poner el asunto del correo
    $mail->Subject = 'Formulario generado';
    //aqui poner el mensaje del correo
    $mail->Body    = 'Hola! Adjunto formulario generado.';

    //enviar PDF
    $mail->send();
    

    //imprimimos que se envio correo
    http_response_code(200);
    echo json_encode(['msg' => 'El correo ha sido enviado']);

} catch (Exception $e) {
    //el correo no se envio por algun error
    http_response_code(500);
    echo json_encode(['msg' => 'Error al enviar el correo']);
}