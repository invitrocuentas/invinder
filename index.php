<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="libraries/animate.min.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>InVinder</title>
</head>
<body>

    <?php 
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
        $host = $_SERVER['HTTP_HOST'];
        $uri = $_SERVER['REQUEST_URI'];
        $url = $protocol . $host . $uri;
    ?>
    
    <div class="presentation wh-100vh relative">
        <img src="img/iv_vector.png" class="vector absolute">
        <div class="title absolute">
            <img src="img/invinder.png" class="logo">
        </div>
        <div class="contenido absolute">
            <div class="animate__animated animate__fadeInUp animate__delay-2s">
                <h1>¡Te damos la bienvenida!</h1>
                <p>Bienvenido a invinder, si tu idea es desarrollarte en el mundo digital, encuentra tu match ideal y nosotros nos comunicaremos a la brevedad.
                    <b>¡Estás a un paso de tu servicio soñado!</b>
                </p>
                <a href="location.php">Hagamos Match</a>
            </div>
        </div>
    </div>

</body>
</html>