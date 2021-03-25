<?php

function printCubes(int $nbCubes, string $colorClass) : void {

    for($i = 0; $i < $nbCubes; $i++) {

        echo '<div class="cube ' . $colorClass . '"></div>' . "\n";
 
    }
}

$cubeRed = $_GET['red'];
$cubeBlue = $_GET['blue'];
$cubeYellow = $_GET['yellow'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de cubes</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>Vive les cubes !</h1>

    <?php printCubes($cubeRed, 'red');  ?>

    <hr>

    <?php printCubes($cubeBlue, 'blue');  ?>

    <hr>

    <?php printCubes($cubeYellow, 'yellow');  ?>
    
</body>
</html>