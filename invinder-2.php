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

    <?php include_once './inc/nav_mobile.php'; ?>
    
    <div class="invinder wh-100vh relative">
        <aside>
            <div class="chat">
                <div class="chat_profile">
                    <div class="chat_profile_user">
                        <img src="img/profile.png">
                    </div>
                </div>
                <div class="chat_box"></div>
                <?php include_once './inc/nav.php'; ?>
            </div>
        </aside>
        <main class="canvas_cards">
            <div class="card informed">
                <div class="after">
                    <img src="img/match.gif">
                </div>
                <div class="splide" id="photos">
                    <button class="to_second_view absolute">
                        <img src="img/arrow.png" class="wh-100">
                    </button>
                    <button class="to_first_view absolute active">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40" focusable="false"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg>
                    </button>
                    <div class="splide__track wh-100">
                        <ul class="splide__list wh-100">
                            <li class="splide__slide wh-100">
                                <img src="img/perfiles/2/photo1.png" class="wh-100">
                            </li>
                            <li class="splide__slide wh-100">
                                <img src="img/perfiles/2/photo2.png" class="wh-100">
                            </li>
                            <li class="splide__slide wh-100">
                                <img src="img/perfiles/2/photo3.png" class="wh-100">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card_content">
                    <img src="img/info.png" class="i" id="extend">
                    <h2>Dev Rollo <span class="age">32 <img src="img/verified.png"></span></h2>
                    <ul>
                        <li>
                            <img src="img/cargo.png">
                            <p>Claro y estructurado</p>
                        </li>
                        <li>
                            <img src="img/marker.png">
                            <p>A un clic de distancia</p>
                        </li>
                    </ul>
                </div>
                <div class="card_content_inside">
                    <h2>Dev Rollo <span class="age">32 <img src="img/verified.png"></span></h2>
                    <ul>
                        <li>
                            <img src="img/cargo-blue.png">
                            <p>Claro y estructurado</p>
                        </li>
                        <li>
                            <img src="img/marker-blue.png">
                            <p>A un clic de distancia</p>
                        </li>
                    </ul>
                    <div class="w-100 tags">
                        <div class="tag" style="background:#EA2788">
                            <img src="img/code.png">
                            <p>Desarrollemos <b>tu página web</b></p>
                        </div>
                        <div class="tag" style="background:#F2A933">
                            <p>Personalidad <b>INTP</b></p>
                        </div>
                    </div>
                </div>
                <div class="card_nav">
                    <a href="invinder-1.php" class="share" style="border-color:#EA2788;">
                        <img src="img/icon/share.png">
                    </a>
                    <a href="invinder-3.php" class="close" style="border-color:#3333CC">
                        <img src="img/icon/close.png">
                    </a>
                    <a href="contactanos.php" style="border-color:#F2A933">
                        <img src="img/icon/star.png">
                    </a>
                    <a href="#" style="border-color:#30CEB3" class="like">
                        <img src="img/icon/heart.png">
                    </a>
                    <a href="#" style="border-color:#FF5822" style="pointer-events:none">
                        <img src="img/icon/flash.png">
                    </a>
                </div>
                <div class="card_nav_inside">
                    <a href="invinder-3.php" class="close" style="border-color:#3333CC">
                        <img src="img/icon/close.png">
                    </a>
                    <a href="#" style="border-color:#F2A933">
                        <img src="img/icon/star.png">
                    </a>
                    <a href="#" style="border-color:#30CEB3" class="like">
                        <img src="img/icon/heart.png">
                    </a>
                </div>
                <div class="card_description absolute">
                    <h3>Dev Rollo <span class="age">32 <img src="img/verified.png"></span></h3>
                    <ul class="me">
                        <li>
                            <img src="img/cargo-blue.png">
                            <p>Claro y estructurado</p>
                        </li>
                        <li>
                            <img src="img/marker-blue.png">
                            <p>A un clic de distancia</p>
                        </li>
                    </ul>

                    <div class="w-100">
                        <div class="tag small" style="background:#EA2788">
                            <img src="img/code.png">
                            <p>Desarrollemos <b>tu página web</b></p>
                        </div>
                        <div class="tag small" style="background:#F2A933">
                            <p>Personalidad <b>INTP</b></p>
                        </div>
                    </div>

                    <div class="hr"></div>
                    <h4 style="color:#30CEB3">Sobre mí</h4>
                    <p>
                        Poliglota a tiempo completo.
                        <br>
                        Soy introvertido, intuitivo y responsable, en mis tiempos libres creo aplicaciones para celular.
                    </p>
                    <div class="hr"></div>
                    <h4 style="color:#EA2788">Idiomas que hablo</h4>
                    <ul class="languages dev">
                        <li>
                            <img src="img/js.png">
                        </li>
                        <li>
                            <img src="img/python.png">
                        </li>
                        <li>
                            <img src="img/php.png">
                        </li>
                    </ul>
                </div>
            </div>
        </main>
        <?php include_once './inc/publicidad.php'; ?>
    </div>

    <script src="libraries/splide.min.js"></script>
    <script src="js/sliders.js"></script>

</body>
</html>