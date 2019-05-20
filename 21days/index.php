<!DOCTYPE html>
<html>
<head>
    <title>Азбука здоровья</title>
    <meta charset="utf-8">
    <meta name="keywords" content="Азбука здоровья">
    <meta name="description" content="Азбука здоровья">
    <meta property="og:image" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:image" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="../styles/elements/intlTelInput.css">
    <link href="../styles/global_styles.css" rel="stylesheet" type="text/css">
    <link href="../styles/header.css" rel="stylesheet" type="text/css">
    <link href="../styles/elements/humburger.css" rel="stylesheet" type="text/css">
    <link href="../styles/start_block.css" rel="stylesheet" type="text/css">
    <link href="../styles/will_suit_block.css" rel="stylesheet" type="text/css">
    <link href="../styles/what_you_get_block.css" rel="stylesheet" type="text/css">
    <link href="../styles/reviews_block.css" rel="stylesheet" type="text/css">
    <link href="../styles/how_it_work_block.css" rel="stylesheet" type="text/css">
    <link href="../styles/curators_block.css" rel="stylesheet" type="text/css">
    <link href="../styles/price_block.css" rel="stylesheet" type="text/css">
    <link href="../styles/faq_block.css" rel="stylesheet" type="text/css">
    <link href="../styles/videos_block.css" rel="stylesheet" type="text/css">
    <link href="../styles/footer.css" rel="stylesheet" type="text/css">
    <link href="../styles/form.css" rel="stylesheet" type="text/css">
    <link href="../js/timer/timeTo.css" type="text/css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/form.js"></script>
    <?php
    include('../js/pixel_facebook.html');
    include('../js/google_statistic.html');
    include('../js/google_target.html');
    include('../js/yandex_metrika.html');
    ?>
</head>
<body>

<?php
include('php/request.php');
include('../texts.php');
include('../components/header.php');                  //0.шапка сайта
include('../components/start_block.php');                //1.титульная страница
include('../components/will_suit_block.php');         //2.Азбука здоровья нужна Вам если
include('../components/what_you_get_block.php');      //4.Что ты получаешь
include('../components/curators_block.php');          //5.Кураторы
include('../components/price_block.php');                //6.Блок оплаты
include('../components/reviews_block.php');           //7.Отзывы
include('../components/how_it_work_block.php');       //8.Как это работает
include('../components/faq_block.php');                  //9.Вопрос-ответ
include('../components/videos_block.php');               //10.Финальная страница
include('../components/footer.php');                  //низ сайта
include('../modals/modal_oferta.html');
include('../modals/modal_politics.html');
include('../modals/modal_otkaz.html');
include('../modals/form.html');
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Lfgw5QUAAAAAHmj-_7YuLUPbtUd7syqWKYqYol5"></script>
<script src="../js/main_script.js"></script>
<script src="../js/acordion.js"></script>
<script src="../js/youtube.js" async></script>
<script src="../js/slider.js"></script>
<script src="../js/intlTelInput.js"></script>
<script src="../js/timer/jquery.time-to.js"></script>
<script src="../js/timer/timer21.js"></script>
<script src="../js/recaptcha.js"></script>
<script>
    $("#form_phone").intlTelInput({
        initialCountry: "auto",
        geoIpLookup: function(callback) {
            jQuery.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            });
        },
        preferredCountries: ['ua', 'ru'],
        utilsScript: "../js/utils.js"
    });
</script>
</body>
</html>
