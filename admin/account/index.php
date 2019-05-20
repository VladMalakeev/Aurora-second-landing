<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
$db = DataBase::getInstance();
$webinar = $db->query("SELECT * FROM webinar_date WHERE id = 1")->fetch(PDO::FETCH_LAZY);
$landing21 = $db->query("SELECT * FROM landing_21_days WHERE id = 1")->fetch(PDO::FETCH_LAZY);
$landing7 = $db->query("SELECT * FROM landing_7_days WHERE id = 1")->fetch(PDO::FETCH_LAZY);
?>
<a class="exit" href="/?exit=true">Выйти</a>
<div class="b1">
    <h1>Webinar</h1>
    <form action="requests/webinar.php" method="POST">
        <div class="formWrap">
            <div class="formElement">
                <p>Дата (год-месяц-день)</p>
                <input type="text" name="date" maxlength="10" value="<? echo $webinar['date'] ?>"/>
            </div>
            <div class="formElement">
                <p>Время (часы:минуты:секунды)</p>
                <input type="text" name="time" maxlength="8" value="<? echo $webinar['time'] ?>"/>
            </div>
            <div class="formElement">
                <p>Текст (дата старта)</p>
                <input type="text" name="text" value="<? echo $webinar['text'] ?>"/>
            </div>
        </div>
        <input class="submit" type="submit" name="submit" value="Сохранить">
    </form>
</div>


<div class="b2">
    <h1>Landing 7 days</h1>
    <form action="requests/landing7.php" method="POST">
        <div class="formWrap">
            <div class="formElement">
                <p>Дата (год-месяц-день)</p>
                <input type="text" name="date" maxlength="10" value="<? echo $landing7['date'] ?> "/>
            </div>
            <div class="formElement">
                <p>Время (часы:минуты:секунды)</p>
                <input type="text" name="time" maxlength="8" value="<? echo $landing7['time'] ?> "/>
            </div>
            <div class="formElement">
                <p>Текст (дата старта)</p>
                <input type="text" name="text" value="<? echo $landing7['text'] ?>"/>
            </div>
        </div>
        <input class="submit" type="submit" name="submit" value="Сохранить">
    </form>
</div>

<div class="b1">
    <h1>Landing 21 days</h1>
    <form action="requests/landing21.php" method="POST">
        <div class="formWrap">
            <div class="formElement">
                <p>Дата (год-месяц-день)</p>
                <input type="text" name="date" maxlength="10" value="<? echo $landing21['date'] ?>"/>
            </div>
            <div class="formElement">
                <p>Время (часы:минуты:секунды)</p>
                <input type="text" name="time" maxlength="8" value="<? echo $landing21['time'] ?>"/>
            </div>
            <div class="formElement">
                <p>Текст (дата старта)</p>
                <input type="text" name="text" value="<? echo $landing21['text'] ?> "/>
            </div>
        </div>
        <input class="submit" type="submit" name="submit" value="Сохранить">
    </form>
</div>
</body>
</html>