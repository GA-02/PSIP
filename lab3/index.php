<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="GET">
        <input type="hidden" name="mark" value="0">
        <input type="checkbox" name="mark" value="1">
        <input type="submit">
        <?= input('dataInput', 'none'); ?>
    </form>
    <?php
    if (isset($_REQUEST['mark'])) {
        switch ($_REQUEST['mark']) {
            case (0):
                echo 'не отмечен';
                break;
            case (1):
                echo 'отмечен';
                break;
            default:
                break;
        }
    } ?>
    <hr>
    <form action="" method="GET">
        <input type="hidden" name="hello" value="0">
        <input type="checkbox" name="hello" value="1">
        <input type="text" name="userName" placeholder="Введите имя">
        <input type="submit">
    </form>

    <?php
    if (isset($_REQUEST['hello'])) {
        switch ($_REQUEST['hello']) {
            case (1):
                echo "<script>alert('Привет, {$_REQUEST['userName']}')</script>";
                break;
            case (0):
                echo "<script>alert('Прощай, {$_REQUEST['userName']}')</script>";
                break;
            default:
                break;
        }
    }
    ?>
    <hr>
    <form action="" method="GET">
        Знаете ли вы PHP? <br>
        <label><input type="radio" name='knowPHP' checked value="true">да</label><br>
        <label><input type="radio" name='knowPHP' value="false">нет</label><br>
        <input type="submit"><br>
        <?php
        if (isset($_REQUEST['knowPHP'])) {
            switch ($_REQUEST['knowPHP']) {
                case ('true'):
                    echo "Поздравляем! Вы знаете PHP";
                    break;
                case ('false'):
                    echo "Поздравляем! Вы не знаете об этой помойке😊";
                    break;
                default:
                    break;
            }
        }
        $😊 = '(funny)';
        echo $😊;
        ?>
    </form>
    <hr>

    <form action="" method="GET">
        Выберите языки, которые вы знаете: <br>
        <label"><input type="checkbox" name="language[]" value="html">html</label><br>
            <label"><input type="checkbox" name="language[]" value="css">css</label><br>
                <label"><input type="checkbox" name="language[]" value="php">php</label><br>
                    <label"><input type="checkbox" name="language[]" value="javascript">javascript</label><br>
                        <input type="submit"> <br>
    </form>
    <?php
    if (isset($_REQUEST['language']))
        echo 'Вы знаете следующие языки: ' . join(', ', $_REQUEST['language']);
    ?>

    <?php
    function input($name, $value)
    {
        if (isset($_REQUEST[$name])) {
            $value = $_REQUEST[$name];
        }
        return '<input type="text" name="' . $name . '" value="' . $value . '">';
    }
    ?>

</body>

</html>