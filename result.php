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
</body>
</html>