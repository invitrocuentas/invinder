<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="libraries/animate.min.css">
    <link rel="stylesheet" href="libraries/splide.min.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <title>InVinder</title>
</head>
<body>

    <style>.chat_persons li:nth-child(4){background:rgba(48,206,179,0.5);}</style>
    
    <div class="invinder wh-100vh relative two-cols">
        <?php include_once './inc/aside.php'; ?>
        <main class="profile_container">
            <div class="profile_container_nav">
                <a href="perfil-3.php" class="share" style="border-color:#EA2788;">
                    <img src="img/icon/share.png">
                </a>
                <a href="perfil-5.php" class="close" style="border-color:#3333CC">
                    <img src="img/icon/close.png">
                </a>
                <a href="#" style="border-color:#F2A933">
                    <img src="img/icon/star.png">
                </a>
                <a href="#" style="border-color:#30CEB3" class="big_like">
                    <img src="img/icon/heart.png">
                </a>
            </div>
            <div class="profile_box">
                <div class="after">
                    <img src="img/match.gif">
                </div>
                <div class="profile_box_header">
                    <div class="col">
                        <img src="img/messages/person4.png">
                    </div>
                    <div class="col">
                        <h1>Elvis Deo 3D <span class="age">19 <img src="img/verified.png"></span></h1>
                        <ul>
                            <li>
                                <img src="img/cargo-blue.png">
                                <p>Audiovisual</p>
                            </li>
                            <li>
                                <img src="img/marker-blue.png">
                                <p>A un clic de distancia</p>
                            </li>
                        </ul>
                        <div class="w-100">
                            <div class="tag" style="background:#3333CC">
                                <img src="img/isotopo.png">
                                <p>Acompañame <b>a salir del plano</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile_box_body">
                    <div class="col">
                        <div class="col_title">
                            <h2>Más sobre mi</h2>
                        </div>
                        <p>Siempre listo para nuevos retos, nunca digo que algo no puede hacerse, ¡siempre hay solución!</p>
                        <p><b>¡Acompañame a otra dimensión!</b></p>
                        <p>Cosas que me gusta hacer</p>
                        <ul>
                            <li>Difundir de forma dinámica productos y servicios</li>
                            <li>Vectorizar logos y animarlos</li>
                            <li>Renderizar proyectos</li>
                        </ul>
                    </div>
                    <div class="col">
                        <div class="col_title">
                            <h2>Idiomas que hablo</h2>
                        </div>
                        <div class="lngs">
                            <ul>
                                <li>
                                    <img src="img/ps.png">
                                    <p>Edito, retoco y hago <b>montajes de lo que quieras en Photoshop.</b></p>
                                </li>
                                <li>
                                    <img src="img/ai.png">
                                    <p>Estructuramos los elementos <b>vectoriales necesarios para representar la personalidad de tu marca</b> en Ilustrator.</p>
                                </li>
                                <li>
                                    <img src="img/pr.png">
                                    <p>Recorto tu video, le agrego música y mejoro el audio. <b>¿Te gustan las transiciones?</b></p>
                                </li>
                                <li>
                                    <img src="img/ae.png">
                                    <p><b>Le doy vida a elementos de tu video</b>, agregándole lo necesario para que sea épico y diferencial.</p>
                                </li>
                                <li>
                                    <img src="img/4d.png">
                                    <p><b>Renderizo tu producto para sacarlo del plano convencional</b> y proyectarlo tal cual es en tus videos.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="libraries/splide.min.js"></script>
    <script src="js/sliders.js"></script>

</body>
</html>