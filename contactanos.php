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
    
    <div class="invinder wh-100vh relative two-cols">
        <?php include_once './inc/aside.php'; ?>
        <main class="contact">
            <div class="contact_box">
                <div class="contact_box_head">
                    <h2>Contáctanos</h2>
                    <p>¡La conexión es real! Hemos notado que te interesa uno de nuestros perfiles, <b>¿Te gustaría coordinar una primera cita?</b></p>
                    <p>Bríndanos tus datos para ponerte en contacto con tu Match soñado y <b>no dejemos para más tarde lo que puede ser hoy.</b></p>
                </div>
                <div class="contact_box_body">
                    <form class="cf" method="post" action="contacto.php">
                        <div>
                            <label for="">Nombres y apellidos</label>
                            <input type="text" name="nombre" required>
                            <p>Escribe aquí</p>
                        </div>
                        <div>
                            <label for="">Celular</label>
                            <input type="text" name="telefono" oninput="validarTelefono(this)" maxlength="11" required>
                            <p>Escribe aquí</p>
                        </div>
                        <div>
                            <label for="">Correo electrónico</label>
                            <input type="email" name="correo" required>
                            <p>Escribe aquí</p>
                        </div>
                        <div>
                            <label for="">Descripción de tu empresa</label>
                            <textarea name="descripcion" required></textarea>
                            <p>Escribe aquí</p>
                        </div>
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <script src="libraries/splide.min.js"></script>
    <script src="js/sliders.js"></script>

    <script>
        function validarTelefono(input) {
            // Remover caracteres no numéricos del valor del input
            var numero = input.value.replace(/\D/g, '');

            // Validar longitud del número
            if (numero.length < 8 || numero.length > 11) {
                input.setCustomValidity('El número de teléfono debe tener entre 8 y 11 dígitos.');
            } else {
                input.setCustomValidity('');
            }

            // Actualizar el valor del input con los dígitos numéricos
            input.value = numero;
        }
    </script>

</body>
</html>