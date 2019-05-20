<?php
include('php/config.php');
$db = DataBase::getInstance();

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$result = $db->query("SELECT * FROM webinar WHERE phone = '$phone'")->fetchAll(PDO::FETCH_ASSOC);
if(count($result)>0){
   echo '{"status":"exist","text":"Похоже Вы уже отправляли заявку!"}';
   exit;
}else {
    $db->exec("INSERT INTO webinar(name,email,phone) VALUES('$name','$email','$phone')");
}
$message = "Новая заявка:\n 
                Имя - $name \n 
                Email: $email\n 
                Телефон: $phone\n";

$userMessage = "Здравствуйте! Рады видеть Вас в числе зарегестировавшихся на наш открытый вебинар! Очень круто, что с каждым днём, число людей, интересующихся своим здоровьем увеличивается! Хотим напомнить Вам, что вебинар состоиться 21 мая в 20 00 по киевскому времени. Увидимся!";
$userSubject = "Онлайн Школа Азбука Здоровья";

$telegram='890903194:AAH8TKyWMinZG-NzIPIOap4kSOxrimug_g0';
$chat_id='@AlphabetOfHealthWebinar';

$to = 'myhealth.courses@gmail.com';
$account ="mail@alphabet-of-health.com";
$subject = "Новая заявка на вебинар";
$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';

//Формируем заголовки для почтового сервера
$headers  = "Content-type: text/html; charset=\"utf-8\"\r\n";
$headers .= "From: ". $account ."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";

$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,
    'https://api.telegram.org/bot'.$telegram.'/sendMessage');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,
    'chat_id='.$chat_id.'&text='.urlencode($message));
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
// Отправить сообщение
$telegram_response =curl_exec($ch);
curl_close($ch);
$mail_status =  mail($to, $subject, $message, $headers);
$welcome =  mail($email, $userSubject, $userMessage, $headers);
$telegram_status = json_decode($telegram_response)->ok;

if($telegram_status || $mail_status){
    echo '{"status":"true","text":"Благодарим Вас за успешно отправленную заявку"}';

}else{
    echo '{"status":"false","text":"Похоже произошла ошибка, пожалуйста попробуйте позже."}';
}