<?php
    require "Competitor.php";
    $file = fopen("data.txt", "rb");
    $fileContent = fread($file, filesize("data.txt"));
    $competitors = explode("**", $fileContent);
    array_pop($competitors);
    $competitorsArray = array();
    foreach ($competitors as $c) { 
        $competitorData = explode("//", $c);
        $competitor = new Competitor($competitorData[0], $competitorData[1], $competitorData[2], 10);
        array_push($competitorsArray, $competitor);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados TRIVIA</title>
</head>
<body>
    <h1>Resultados de la trivia</h1>
    <h2>Número de participantes: <?php echo count($competitorsArray); ?></h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Respuestas correctas</th>
            <th>Tiempo empleado</th>
        </tr>
        <?php
            foreach ($competitorsArray as $c) {
                echo "<tr>";
                echo "<td>".$c->getName()."</td>";
                echo "<td>".$c->getEmail()."</td>";
                echo "<td>".$c->getCorrectAnswers()."</td>";
                echo "<td>".$c->getTime()."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>