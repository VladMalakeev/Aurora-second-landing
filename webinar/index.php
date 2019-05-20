<!DOCTYPE html>
<html lang="en">
<head>
    <title>Азбука здоровья</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Азбука здоровья">
    <meta name="description" content="Азбука здоровья">
    <meta property="og:image" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:image" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link type="text/css" rel="stylesheet" href="styles/intlTelInput.css">
    <link href="styles/style.css" type="text/css" rel="stylesheet"/>
    <link href="js/timer/timeTo.css" type="text/css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/evolventa" type="text/css"/>
    <script src="js/script.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134638921-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-134638921-1');
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(52381285, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/52381285" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '415141229244112');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=415141229244112&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
</head>
<body>
<?php
include('php/config.php');
$db = DataBase::getInstance();
$webinarTimer = $db->query('SELECT * FROM webinar_date WHERE id = 1')->fetch(PDO::FETCH_LAZY);
?>
<div id="alert">
    <div id="message">
        <img id="messageImage" width="150px"/>
        <p id="messageText"></p>
        <div id="blockClose">
            <button onclick="closeMessage()" id="buttonClose">Скрыть сообщение</button>
        </div>
    </div>
</div>
<div id="textWrap">
    <div id="textBlock">
        <div class="rombWrap">
            <div class="rombBlock">
                <div class="rombElement">
                    <div class="rombText">
                        <p class="title">ПРАВДА О ЖИРАХ,<br/> которую Вам забыли рассказать</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="subTitle">Пришло время узнать правду и разобраться:</p>
        <ul class="list">
            <li>ПОЧЕМУ  все большую популярность набирают кето диеты?</li>
            <li>ПОЧЕМУ профессиональные тренеры переводят своих подопечных на питание, насыщенное именно жирами ?</li>
            <li>Тогда ПОЧЕМУ нас по-прежнему пугают холестерином и запрещают есть жирную пищу?</li>
            <li>ПОЧЕМУ при похудении мы сразу переходим на обезжиренный творог и 1% кефир?</li>
        </ul>
        <p class="cursive">Узнайте всю правду на эти и другие важные вопросы от диетолога, нутрициолога - <a href="https://www.instagram.com/vershilov/" target="_blank">Кирилла Вершилова</a></p>
    </div>
    <div class="blur"></div>
</div>

<div id="formWrap">
    <div class="mask">
        <div id="formBlock">
            <p class="formTitle">
                Забронировать место на <br/>
                БЕСПЛАТНОМ вебинаре <br/>
                <? echo $webinarTimer['text'] ?>
            </p>
            <form class="form">
                <div class="fieldWrap">
                    <input id="userName" class="field" type="text" name="name" placeholder="Ваше имя" onchange="checkName(this,0)"/>
                </div>

                <div class="fieldWrap">
                    <input class="fieldPhone" type="tel" name="phone" id="form_phone"
                           onchange="checkPhone(this,0)"/>
                </div>

                <div class="fieldWrap">
                    <input id="userEmail" class="field" type="text" name="email" placeholder="Email" onchange="checkEmail(this,0)"/>
                </div>

                <div class="checkbox">
                    <input id="checkBox" type="checkbox" name="checkbox" onchange="changeCheckBox(this)"/>
                    <p>Я согласен на обработку персональных данных</p>
                </div>
                <button type="button" disabled="disabled" class="submitDisabled" id="submit"
                        onclick="checkForm(this.form)">
                    Изменить свою жизнь через
                </button>
            </form>
            <input id="timerDate" type="hidden"value="<? echo $webinarTimer['date'] ?>">
            <input id="timerTime" type="hidden"value="<? echo $webinarTimer['time'] ?>">
            <div class="timerScript"></div>
        </div>
    </div>

    <script src="js/timer/jquery.time-to.js"></script>
    <script src="js/timer/timer.js"></script>
    <script src="js/phone/intlTelInput.js"></script>
    <script>
        $("#form_phone").intlTelInput({
            initialCountry: "auto",
            geoIpLookup: function (callback) {
                jQuery.get('https://ipinfo.io', function () {
                }, "jsonp").always(function (resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
            preferredCountries: ['ua', 'ru'],
            utilsScript: "js/phone/utils.js"
        });
    </script>
</body>
</html>