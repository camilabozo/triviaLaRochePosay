<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/desktop.css" media="(min-width: 980px)">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <title>DERMLIVE INFLUENCERS | Trivia</title>
</head>
<body>
    <header class="header__container">
        <section class="logo__container">
            <img class="logo" src="./assets/img/title1.png" alt="LaRoche-Posay">
        </section>
        <section class="second_logos__container">
            <img class="microbiome" src="./assets/img/title3.png" alt="Microbiome Science">
            <img class="dermlive" src="./assets/img/title2.png" alt="Dermlive Microbioma">
            <img class="dermlivelaroche" src="./assets/img/title4.png" alt="Dermlive LaRoche-Posay">
        </section>
    </header>

    <!-- FORMULARIO INICIAL -->
    <form action="validate.php" method="POST" id="index_form">
        <main class="form_main__container" id="form_main__container">
            <section class="form__container" id="form__container">
                <label for="nombre">
                    <span>NOMBRE Y APELLIDO</span>
                    <input class="input" type="text" name="userName" id="userName" placeholder="Ingresá tu nombre" required />
                    <div class="error__message" id="name_error__message" hidden>
                        Nombre y apellido inválido. Sólo caracteres alfabéticos.
                    </div>
                </label>
        
                <label class="email" for="email">
                    <span>CORREO ELECTRÓNICO</span>
                    <input class="input" type="email" name="userEmail" id="userEmail" placeholder="Ingresá tu correo electrónico" required />
                    <div class="error__message" id="email_error__message" hidden>
                        Email inválido.
                    </div>
                </label>
        
                <label for="button">
                    <button type="button" class="start__button" id="start__button">¡COMENZAR!</button>
                </label>
            </section>
        </main>
    </form>

    <!-- FIN FORMULARIO INICIAL -->
    <script src="./js/index.js"></script>
    <?php 
        if(isset($_GET['message'])){ 
            $message = $_GET['message'];
            echo '<script> alert("'.$message.'") </script>';
        }
    ?>
</body>
</html>