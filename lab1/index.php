<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "Привет <br>";
    echo "_____________ <br>";
    $a = 10;
    $b = 20;
    echo "a = $a, b = $b <br>";
    $c = $a + $b;
    echo "c = $c <br>";
    echo "c * 3 = " . ($c * 3) . "<br>";
    echo ($c / ($b - $a)) . "<br>";
    $p = "Программа";
    $b = "работает";
    $result = "$p $b";
    echo $result . "<br>";
    $result .= "хорошо";
    echo $result . "<br>";
    $q = 5;
    $w = 7;
    [$q, $w] = [$w, $q];
    echo "q = $q, w = $w";
    ?>
</body>

</html>