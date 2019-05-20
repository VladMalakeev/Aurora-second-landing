<?php
include('config.php');
$db = DataBase::getInstance();
//DataBase::createTables();
header('Content-Type: text/html; charset=UTF8');
$account ="mail@alphabet-of-health.com";
$subject = "Напоминание о вебинаре";
$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';

//Формируем заголовки для почтового сервера
$headers  = "Content-type: text/html; charset=\"utf-8\"\r\n";
$headers .= "From: ". $account ."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";

$webinarDate =  $db->query("SELECT * FROM webinar_date WhERE id = 1")->fetch(PDO::FETCH_LAZY);
$dbTime = $webinarDate['date'].' '.$webinarDate['time'];
$currentDate = new DateTime();
$currentSeconds =  $currentDate->getTimestamp();
$webinarSeconds =  new DateTime($dbTime);
$webinarSeconds = $webinarSeconds->getTimestamp();
$hours = ($webinarSeconds - $currentSeconds)/3600;
$users = $db->query("SELECT * FROM webinar")->fetchAll(PDO::FETCH_ASSOC);
if($hours<=25 && $hours>24){
    $message  = "Завтра в 21:00 будет вебинар!!!";
    echo $message;
    foreach ($users as $user){
        //mail($user['email'], $subject, $message, $headers);
    }
    mail('vlad.malakeev@gmail.com', $subject, $message, $headers);
}
if($hours<=7 && $hours>6){
    $message  = "через 6 часов будет вебинар!!!";
    echo $message;
    foreach ($users as $user){
        //mail($user['email'], $subject, $message, $headers);
    }
    mail('vlad.malakeev@gmail.com', $subject, $message, $headers);
}
if($hours<=2 && $hours>1){
    $message  = "через 1 час будет вебинар!!!";
    echo $message;
    foreach ($users as $user){
        //mail($user['email'], $subject, $message, $headers);
    }
    mail('vlad.malakeev@gmail.com', $subject, $message, $headers);
}





