<?php
include('../config/config.php');
$db = DataBase::getInstance();

if(isset($_POST['submit'])){
    $date = $_POST['date'];
    $time = $_POST['time'];
    $text = $_POST['text'];

    $db->exec("UPDATE landing_21_days SET date='$date', time='$time', text = '$text'");
    header('Location:/');
}