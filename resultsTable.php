<?php
    include "orderCompetitors.php";    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/resultsTable.css">
    <title>Resultados TRIVIA</title>
</head>
<body>
    <header class="header__container">
        <section class="logo__container">
            <img class="microbiome" src="./assets/img/title3.png" alt="Microbiome Science">
            <img class="dermlive" src="./assets/img/title2.png" alt="Dermlive Microbioma">
            <img class="logo" src="./assets/img/title1.png" alt="LaRoche-Posay">
            <img class="dermlivelaroche" src="./assets/img/title4.png" alt="Dermlive LaRoche-Posay">
        </section>
    </header>
    <section class="container">
        <section class="main__container">
            <section class="title__container">
                <h1>RESULTADOS DE LA TRIVIA</h1>
                <h2>Cantidad de participantes: <?php echo count($competitorsArray); ?></h2>
            </section>
            <section class="table__container">
                <table>
                    <tr>
                        <th>Participante</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Respuestas correctas</th>
                        <th>Tiempo empleado</th>
                        <th>Hora de finalización</th>
                    </tr>
                    <?php
                        foreach ($competitorsArray as $key => $c) {
                            if($key%2 == 0){
                                $pairOrOdd = "pair__row";
                            }else{
                                $pairOrOdd = "odd__row";
                            }
                            echo "<tr class='".$pairOrOdd."'>";
                            echo "<td>".++$key."</td>";
                            echo "<td>".$c->getName()."</td>";
                            echo "<td>".$c->getEmail()."</td>";
                            echo "<td>".$c->getCorrectAnswers()."/3</td>";
                            echo "<td>".$c->getEmployedTime()."</td>";
                            echo "<td>".$c->getEndTime()."hs</td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </section>
        </section>
    </section>
</body>
</html>