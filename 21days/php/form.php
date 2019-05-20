<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $text = $_POST['message'];
    $checkViber = $_POST['viber'];
    $checkTelegram = $_POST['telegram'];
    $days = $_POST['days'];
    //токен recaptcha
    $token = $_POST['token'];
    $secret = "6Lfgw5QUAAAAAO9PeUkh0H5A4MEhLxqcVLDyucaY";

    // Токен бота и идентификатор чата telegram
    $telegram='879104635:AAFfq7fAoeB_3k5AmyI3nq9fzSxwogB9BQA';
    $chat_id='@alphabetOfHealthNotification';

    $to = 'myhealth.courses@gmail.com';
    $account ="mail@alphabet-of-health.com";
    $subject = "Новая заявка от пользователя";
    $subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
    $message = "Новая заявка:\n 
                Имя - $name, \n 
                Email: $email,\n 
                Телефон: $phone,\n 
                Комментарий: $text,\n 
                Viber: $checkViber,\n 
                Telegram: $checkTelegram,\n
                Длительность: $days";

    //Формируем заголовки для почтового сервера
    $headers  = "Content-type: text/html; charset=\"utf-8\"\r\n";
    $headers .= "From: ". $account ."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
    //Отправляем данные на ящик админа сайта
    // if submitted check response

    if( $curl = curl_init() ) {
        curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, "secret=$secret&response=$token");
        $out = curl_exec($curl);
        curl_close($curl);

        $captcha_response = json_decode($out);
        if ($captcha_response != null && $captcha_response->success) {

            // Отправить сообщение
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
           $telegram_response=curl_exec($ch);
            curl_close($ch);
           echo '{"status":"true","text":"Ваше письмо успешно отправлено!"}';


           $telegram_status = json_decode($telegram_response)->ok;
           $mail_status =  mail($to, $subject, $message, $headers);
            if (!$mail_status || !$telegram_status) {
                echo '{"status":"false","text":"Ошибка при отправке письма"}';
            } else {
                echo '{"status":"true","text":"Ваше письмо успешно отправлено!"}';
            }
        }
        else {
            echo '{"status":"false","text":"Вы не прошли проверку капчи"}';
        }
    }else echo '{"status":"false","text":"Ошибка при отправке запроса на recaptcha!"}';
}