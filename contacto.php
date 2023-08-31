<?php


// We create a variable for name value
$nombre = $_POST['nombre'] ?? '';

// We create a variable for email value
$correo = $_POST['correo'] ?? '';

// We create a variable for message value
$telefono = $_POST['telefono'] ?? '';

// We create a variable for message value
$descripcion = $_POST['descripcion'] ?? '';

// We provide an e-mail address from which the email is sent
$titulo = 'InVinder';

// Provide the e-mail address on which you want to receive messages
$to = 'k.garcia@invitro.pe';
/*$to  = 'scalagroup.pe@gmail.com' . ', ';
$to .= 'm.angeles@invitro.pe' . ', ';
$to .= 'e.quispe@invitro.pe' . ', ';
$to .= 'j.canchan@invitro.pe';*/


// Provide the subject of the e-mail
$subject = "InVinder | Contacto";

// We prepare the message body

if( !empty($nombre) && !empty($correo) && !empty($telefono) && !empty($descripcion) ){

    $emailbody = "";
    $emailbody .= "Nombre: " . $nombre . "\n";
    $emailbody .= "Correo: " . $correo . "\n";
    $emailbody .= "Celular: " . $telefono . "\n";
    $emailbody .= "descripcion: " . $descripcion . "\n";

    // We add UTF-8 to the header of our message
    $header = 'From: InVinder<'.$titulo.'>' . "\r\n" . 'Reply-To: ' . $correo;
    //$header .= "De:" . $from . " \n";

    $header .= "Content-Type:text/plain;charset=utf-8";


    // Sending message 
    $success = mail($to, $subject, $emailbody, $header);


    // Redirect after sending the message
    if ($success){
        print "<meta http-equiv=\"refresh\" content=\"0;URL=gracias.html\">";
    }else{
        print "<meta http-equiv=\"refresh\" content=\"0;URL=gracias.html\">";
    }

}else{
    
    print "<meta http-equiv=\"refresh\" content=\"0;URL=gracias.html\">";
    
}

?>