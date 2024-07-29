<?php

class HtmlGenerator {
    // Método estático para generar el HTML
    public static function createEmailHtml($name, $message, $code) {
        $html = "
            <!DOCTYPE html>
            <html lang='es'>
            <head>
                <meta charset='UTF-8'>
                <title>Mensaje de Correo</title>
                <style>
                    body { font-family: Arial, sans-serif; }
                    .container { padding: 20px; border: 1px solid #ccc; }
                    .message { margin-top: 10px; }
                    .code { margin-top: 10px; font-weight: bold; color: #333; }
                </style>
            </head>
            <body>
                <div class='container'>
                    <h1>Hola, $name!</h1>
                    <div class='message'>
                        <p>$message</p>
                    </div>
                    <div class='code'>
                        <p>ingresa esta nueva contraseña: $code</p>
                    </div>
                </div>
            </body>
            </html>
        ";
        return $html;
    }
}