<!DOCTYPE>
<html>
<head>
    <title>Азбука здоровья</title>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta property="og:image" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="styles/elements/intlTelInput.css">
    <link href="styles/global_styles.css" rel="stylesheet" type="text/css">
    <link href="styles/header.css" rel="stylesheet" type="text/css">
    <link href="styles/elements/humburger.css" rel="stylesheet" type="text/css">
    <link href="styles/start_block.css" rel="stylesheet" type="text/css">
    <link href="styles/will_suit_block.css" rel="stylesheet" type="text/css">
    <link href="styles/what_you_get_block.css" rel="stylesheet" type="text/css">
    <link href="styles/reviews_block.css" rel="stylesheet" type="text/css">
    <link href="styles/how_it_work_block.css" rel="stylesheet" type="text/css">
    <link href="styles/curators_block.css" rel="stylesheet" type="text/css">
    <link href="styles/price_block.css" rel="stylesheet" type="text/css">
    <link href="styles/faq_block.css" rel="stylesheet" type="text/css">
    <link href="styles/videos_block.css" rel="stylesheet" type="text/css">
    <link href="styles/footer.css" rel="stylesheet" type="text/css">
    <link href="styles/form.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/form.js"></script>
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
        fbq('init', '2075241126050598');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=2075241126050598&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

</head>
<body>

<?php
    include('components/header.php');
    include('components/start_block.php');
    include('components/will_suit_block.php');
    include('components/what_you_get_block.php');
    include('components/reviews_block.php');
    include('components/how_it_work_block.php');
    include('components/curators_block.php');
    include('components/price_block.php');
    include('components/faq_block.php');
    include('components/videos_block.php');
    include('components/footer.php');
    include('modals/modal_oferta.html');
    include('modals/modal_politics.html');
    include('modals/modal_otkaz.html');
    include('modals/form.html');
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Lfgw5QUAAAAAHmj-_7YuLUPbtUd7syqWKYqYol5"></script>
<script src="js/main_script.js"></script>
<script src="js/acordion.js"></script>
<script src="js/youtube.js" async></script>
<script src="js/slider.js"></script>
<script src="js/intlTelInput.js"></script>

<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6Lfgw5QUAAAAAHmj-_7YuLUPbtUd7syqWKYqYol5', {action: 'homepage'}).then(function(token) {
            console.log(token);
            document.getElementById('form_token').value = token;
        });
    });
</script>

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
        utilsScript: "js/utils.js"
    });
</script>
</body>
</html>
