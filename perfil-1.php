<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="libraries/animate.min.css">
    <link rel="stylesheet" href="libraries/splide.min.css">
    <title>Document</title>
</head>
<body>

    <style>.chat_persons li:nth-child(1){background:rgba(48,206,179,0.5);}</style>
    
    <div class="invinder wh-100vh relative two-cols">
        <?php include_once './inc/aside.php'; ?>
        <main class="profile_container">
            <div class="profile_container_nav">
                <a href="#" class="share" style="border-color:#EA2788;">
                    <img src="img/icon/share.png">
                </a>
                <a href="#" class="close" style="border-color:#3333CC">
                    <img src="img/icon/close.png">
                </a>
                <a href="#" style="border-color:#F2A933">
                    <img src="img/icon/star.png">
                </a>
                <a href="#" style="border-color:#30CEB3">
                    <img src="img/icon/heart.png">
                </a>
            </div>
            <div class="profile_box">
                <div class="profile_box_header">
                    <div class="col">
                        <img src="img/messages/person1.png">
                    </div>
                    <div class="col">
                        <h1>Zoyla Brand <span class="age">25 <img src="img/verified.png"></span></h1>
                        <ul>
                            <li>
                                <img src="img/cargo-blue.png">
                                <p>Personalidad única</p>
                            </li>
                            <li>
                                <img src="img/marker-blue.png">
                                <p>A un clic de distancia</p>
                            </li>
                        </ul>
                        <div class="w-100">
                            <div class="tag" style="background:#FF5822">
                                <img src="img/paint.png">
                                <p>Personalicemos <b>la identidad de marca</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile_box_body">
                    <div class="col">
                        <div class="col_title">
                            <h2>Más sobre mi</h2>
                        </div>
                        <p>Hola soy Zoyla Brand, me encanta conectar con personas interesantes y diferentes.</p>
                        <p><b>¿Qué hariamos en una primera cita? ¿Ir por un café?<br>¿Ir al cine? NOOOOOOOOOO</b></p>
                        <ul>
                            <li>Diseño la personalidad de tu negocio</li>
                            <li>Rescato la esencia de tu marca y la represento visualmente</li>
                            <li>Descubro la voz con la que te comunicas a tu publico.</li>
                        </ul>
                        <p>¡Siempre competitiva!</p>
                    </div>
                    <div class="col">
                        <div class="col_title">
                            <h2>Idiomas que hablo</h2>
                        </div>
                        <div class="tags">
                            <span>Fidelidad actida</span>
                            <span>Puntos de diferencia</span>
                            <span>Positividad</span>
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