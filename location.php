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
    
    <div class="tracker wh-100vh relative">
        <header>
            <div class="contenedor">
                <img src="img/invinder-color.png">
            </div>
        </header>
        <div class="tracker_img absolute">
            <img src="img/tracker.png">
        </div>
    </div>

    <script>
        function redirect(){
            setTimeout(function(e){
                window.location.href = 'choose.php';
            }, 4000)
        }
        window.onpaint = redirect();
    </script>

</body>
</html>