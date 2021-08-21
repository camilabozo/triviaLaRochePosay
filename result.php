<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/result.css">
    <link rel="stylesheet" href="./css/resultDesktop.css" media="(min-width: 980px)">
    <title>¡Gracias por participar!</title>
</head>
<body>
    <header class="header__container">
        <section class="logo__container">
            <img class="logo" src="assets/img/title1.png" alt="LaRoche-Posay">
        </section>
        <section class="second_logos__container">
            <img class="microbiome" src="assets/img/title3.png" alt="Microbiome Science">
            <img class="dermlive" src="assets/img/title2.png" alt="Dermlive Microbioma">
            <img class="dermlivelaroche" src="assets/img/title4.png" alt="Dermlive LaRoche-Posay">
        </section>
    </header>

    <main class="main_result__container">
        <section class="second_title__container">
            <h2>Respuestas correctas</h2>
        </section>
        <section class="correct_answers__container">
            <h2 class="correct__answers"><?php echo $_GET['correctAnswers']."/3"?></h2>
        </section>
        <section class="main_title__container">
            <h1>¡GRACIAS POR PARTICIPAR!</h1>
        </section>
    </main>

    <section class="answers__container">
        <!-- Card que se mostrará cuando el usuario elija una respuesta -->
        <section class="answer_card__container" id="first__answer">
            <section class="card__content">
                <section class="affirmation_button__container">
                    <img class="answer__button" src="./assets/img/redbtn.png" alt="Respuesta">
                    <h2 class="card_second__title">FALSO</h2>
                </section>
                <p>La composición bacteriana del microbioma de cada persona es tan única como la huella dactilar.  El microbioma también varía según la parte del cuerpo: algunas partes del mismo están más pobladas con organismos que otras.</p>
                <!--<a href="#">MÁS INFORMACIÓN</a>-->
            </section>
        </section>
        <!-- Card que se mostrará cuando el usuario elija una respuesta -->
        <section class="answer_card__container" id="second__answer">
            <section class="card__content">
                <section class="affirmation_button__container">
                    <img class="answer__button" src="./assets/img/greenbtn.png" alt="Respuesta">
                    <h2 class="card_second__title">VERDADERO</h2>
                </section>
                <p>Un microbioma diverso y balanceado ayuda a tener una piel saludable, por lo cual si el mismo se encuentra desequilibrado diversas patologías como la dermatitis atópica pueden aparecer en escena.</p>
                <!--<a href="#">MÁS INFORMACIÓN</a>-->
            </section>
        </section>
        <!-- Card que se mostrará cuando el usuario elija una respuesta -->
        <section class="answer_card__container" id="third__answer">
            <section class="card__content">
                <section class="affirmation_button__container">
                    <img class="answer__button" src="./assets/img/greenbtn.png" alt="Respuesta">
                    <h2 class="card_second__title">VERDADERO</h2>
                </section>
                <p>El cuidado de la piel con prebióticos transforma la piel en un entorno acogedor y nutritivo para las bacterias. Esto significa proporcionar humedad, nutrientes y oligoelementos necesarios para que el microbioma se encuentre saludable y diverso.</p>
                <!--<a href="#">MÁS INFORMACIÓN</a>-->
            </section>
        </section>
    </section>    
</body>
</html>