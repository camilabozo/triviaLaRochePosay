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

    <!-- INICIO TRIVIA -->

    <form  action="saveData.php" method="POST" id="trivia_form" >
        <main class="main__container">
            <section class="trivia_main__container" id="trivia_main__container">
                <section class="main_title__container" id="main_title__container">
                    <section class="title__container">
                        <h2>VERDADERO <br> <b>O FALSO</b></h2>
                    </section>
                </section>
                <section class="trivia__container">    
                    <section class="card__container" id="first__question">
                        <section class="affirmation_card__container">
                            <h4>TODOS TENEMOS EL <b>MISMO MICROBIOMA</b></h4>
                        </section>
                        <article class="affirmation_img__container">
                            <figure><img class="affirmation__img" src="./assets/img/image1.png" alt=""></figure>
                            <button type="button" class="affirmative__button" id="affirmative_btn__question1"></button>
                            <button type="button" class="negative__button" id="negative_btn__question1"></button>
                        </article>
                    </section>
                    
                    <section class="card__container" id="second__question">
                        <section class="affirmation_card__container">
                            <h4>LA DERMATITIS ATÓPICA SE RELACIONA CON UN <b>MICROBIOMA DESBALANCEADO</b></h4>
                        </section>
                        <article class="affirmation_img__container">
                            <figure><img class="affirmation__img" src="./assets/img/image2.png" alt=""></figure>
                            <button type="button" class="affirmative__button" id="affirmative_btn__question2"></button>
                            <button type="button" class="negative__button" id="negative_btn__question2"></button>
                        </article>
                        <div class="overlay1"></div>
                    </section>
                    
                    <section class="card__container"  id="third__question">
                        <section class="affirmation_card__container">
                            <h4>EL CUIDADO DE LA PIEL CON PREBIÓTICOS AYUDA A TENER UN <b>MICROBIOMA EQUILIBRADO</b></h4>
                        </section>
                        <article class="affirmation_img__container">
                            <figure><img class="affirmation__img" src="./assets/img/image3.png" alt=""></figure>
                            <button type="button" class="affirmative__button" id="affirmative_btn__question3"></button>
                            <button type="button" class="negative__button" id="negative_btn__question3"></button>
                        </article>
                        <div class="overlay2"></div>
                    </section>
                </section>

                <section class="finish_trivia_button__container" id="finish_trivia_button__container">
                    <button type="button" class="finish_trivia__button" id="finish_trivia__button" disabled>¡FINALIZAR!</button>
                </section>
            </section>

            <section class="answers__container">
                <!-- Card que se mostrará cuando el usuario elija una respuesta -->
                <section class="answer_card__container" id="first__answer">
                    <section class="card__content">
                        <h2 class="card__title" id="first_question__result"></h2>
                        <img class="answer__button" src="" alt="Respuesta" id="first_question__icon">
                        <h2 class="card_second__title">FALSO</h2>
                        <p>La composición bacteriana del microbioma de cada persona es tan única como la huella dactilar.  El microbioma también varía según la parte del cuerpo: algunas partes del mismo están más pobladas con organismos que otras.</p>
                        <a href="#">MÁS INFORMACIÓN</a>
                    </section>
                </section>
                <!-- Card que se mostrará cuando el usuario elija una respuesta -->
                <section class="answer_card__container" id="second__answer">
                    <section class="card__content">
                        <h2 class="card__title" id="second_question__result"></h2>
                        <img class="answer__button" src="" alt="Respuesta" id="second_question__icon">
                        <h2 class="card_second__title">VERDADERO</h2>
                        <p>Un microbioma diverso y balanceado ayuda a tener una piel saludable, por lo cual si el mismo se encuentra desequilibrado diversas patologías como la dermatitis atópica pueden aparecer en escena.</p>
                        <a href="#">MÁS INFORMACIÓN</a>
                    </section>
                </section>
                <!-- Card que se mostrará cuando el usuario elija una respuesta -->
                <section class="answer_card__container" id="third__answer">
                    <section class="card__content">
                        <h2 class="card__title" id="third_question__result"></h2>
                        <img class="answer__button" src="" alt="Respuesta" id="third_question__icon">
                        <h2 class="card_second__title">VERDADERO</h2>
                        <p>El cuidado de la piel con prebióticos transforma la piel en un entorno acogedor y nutritivo para las bacterias. Esto significa proporcionar humedad, nutrientes y oligoelementos necesarios para que el microbioma se encuentre saludable y diverso.</p>
                        <a href="#">MÁS INFORMACIÓN</a>
                    </section>
                </section>
            </section>    
        </main>
    </form>

    <!-- FIN TRIVIA -->
    
    <?php 
        $userName = $_GET['name']; 
        $userEmail = $_GET['email']; 
        echo "<script>localStorage.setItem('userName', '".$userName."')</script>";
        echo "<script>localStorage.setItem('userEmail', '".$userEmail."')</script>";
    ?>
    <script src="./js/trivia.js"></script>

</body>
</html>