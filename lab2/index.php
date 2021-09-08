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
    for ($i = 1; $i <= 100; $i++) {
        echo $i . '<br>';
    }
    echo '<br>__________________ <br>';

    $sum = 0;
    for ($i = 1; $i <= 100; $i++) {
        $sum += $i % 7 == 0 ? $i : 0;
    }
    echo "Сумма всех чисел: $sum";
    echo '<br>__________________ <br>';
    $str = "";
    for ($i = 0; $i < 6; $i++) {
        $str .= rand(1, 9);
    }
    echo "Строка $str";
    echo '<br>__________________ <br>';
    $mas = [1, 1, 1, 4, 6, 4, 5];
    $haveEqualElem = false;
    for ($i = 0; $i < count($mas) - 2; $i++) {
        if ($mas[$i] === $mas[$i + 1] && $mas[$i] === $mas[$i + 2]) {
            $haveEqualElem = true;
            break;
        }
    }
    if ($haveEqualElem) {
        echo 'В массиве есть 3 одинаковых числа подряд!';
    } else {
        echo 'В массиве нет 3 одинаковых чисел подряд';
    }
    echo '<br>__________________ <br>';
    $strBegin = "var_text_hello";
    $strEnd = $strBegin[0];
    for ($i = 1; $i < strlen($strBegin); $i++) {
        if ($strBegin[$i - 1] === '_') {
            $strEnd .= mb_strtoupper($strBegin[$i]);
        } else {
            $strEnd .= $strBegin[$i];
        }
    }
    $strEnd = mb_ereg_replace('_', '', $strEnd);
    echo $strEnd;
    echo '<br>__________________ <br>';
    $strBegin = "var_text_hello";
    $strEnd = '';
    for ($i = 0; $i < strlen($strBegin); $i += 2) {
        $strEnd .= $strBegin[$i];
    }
    echo $strEnd;


    //---------------
    $musk = [];
    for ($i = 0; $i < 10; $i++) {
        $mas2 = [];
        for ($j = 0; $j < 10; $j++) {
            $mas2[] = rand(1, 10);
        }
        $musk[] = $mas2;
    }
    echo '<pre>';
    print_r($musk);
    echo '</pre>';
    ?>
</body>

</html>