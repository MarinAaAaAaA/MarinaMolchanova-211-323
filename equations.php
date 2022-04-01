<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
    echo '<h1>Марина Молчанова 211-323</h1>';
    $a = False;
    $b = 7;
    $c = 49;
    if ($a === False) {
        echo 'x * '.$b.' = '.$c.'<br/>';
        echo 'x = '. ($c / $b);
    }
    else if ($b === False) {
        echo $a.' * x'.' = '.$c .'<br/>';
        echo 'x = '.($c / $a);
    }
    else {
        echo $a.' * '. $b.' = x'.'<br/>';
        echo 'x = '.($a*$b);
    }

    ?>
</body>
</html>