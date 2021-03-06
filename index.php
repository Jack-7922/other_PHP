<?php
define('PATH_LOG', 'pat.log');
include 'inc/log.inc.php';
session_start();
if(!isset($_SESSION['test']) and !isset ($_POST['q'])) {
    // Если первый запуск теста, то инициализируем переменные
    $q = 0; // Номер текущего запроса
    $title = 'Пройдите тест';
} else {
    // Создаем сессионную переменную tesт, содержащую массив ответов
    if($_POST['q'] != '1')
        $_SESSION['test'][] = $_POST['answer'];
    $q = $_POST['q'];
    $title = $_POST['title'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    
</head>
<body>
    <table width='50%' border="1" align="center">

    <tr>
        <td align="center">
    <!-- Верхняя часть таблицы -->
        <table width="100%">
            <tr>
                <td align="center">
                <h1><?= $title?></h1>
                <p><a href="/index.php"> Прервать тест и вернуться на сайт</a></p>
                </td>
            </tr>
        </table>
        </td>
    </tr>

    <tr>
        <td>
            <?php
            // В зависимости от номера запроса подключаем 
            // соответствующий файл с вопросами
            switch($q) {
                case 0:
                    include 'start.php';
                    break;
                case 1:
                    include 'q1.php';
                    break;
                case 2:
                    include 'q2.php';
                    break;
                case 3:
                    include 'q3.php';
                    break;
                default:
                    include 'result.php';
            }
            ?>
        </td>
    </tr>
</table>
    <li><a href="index.php?id=log"> Журнал посещений</a></li>
</body>
</html>
