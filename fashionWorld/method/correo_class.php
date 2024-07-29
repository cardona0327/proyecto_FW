<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



class Correo {
    public static function correos($correo,$asunto,$body){
        include("../correos/PHPMailer.php/PHPMailer.php");
        include("../correos/PHPMailer.php/Exception.php");
        include("../correos/PHPMailer/SMTP.php");// Solo si estás usando SMTP

        
        // Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP(); // Send using SMTP
            $mail->SMTPDebug = 2; // Enable verbose debug output                           
            $mail->Host       = 'smtp.mailersend.net'; // Set the SMTP server to send through
            $mail->SMTPAuth   = true; // Enable SMTP authentication
            $mail->Username   = 'MS_I41Bam@trial-3z0vklozyvv47qrx.mlsender.net'; // SMTP username
            $mail->Password   = 'QIY1mpQyoVHe0acD'; // SMTP password
            $mail->SMTPSecure = 'tls'; // Enable TLS encryption
            $mail->Port       = 587; // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            // Recipients
            $mail->setFrom('MS_I41Bam@trial-3z0vklozyvv47qrx.mlsender.net');
            $mail->addAddress($correo,'usuario'); // Corrected email address of recipient

            // Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = $asunto;
            $mail->Body    = $body;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Correo enviado correctamente';
        } catch (Exception $e) {
            echo 'Error al enviar el correo: ' . $mail->ErrorInfo;
        }
            }


        public static function enviarCorreo($correo,$dato){
            include_once("modelo.php");
            include_once("usuarios_class.php");
            include_once("funciones_class.php");
            include_once("token_class.php");
            $id = Usuarios::buscarId($correo);
            Modelo::sqlCambiarClave($nuevaClave,$id);
            $dato = token::creartoken(10);
            $name = Modelo::buscarDatosUser(1,$id);
            $message = "Recuperación de contraseña ";
            $html = HTMLGenerator::createEmailHtml($name, $message, $dato);
            Correo::correos($_POST['correo'],"Recuperación de contraseña",$html);

        }
}



?>