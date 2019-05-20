var fontSize = $(window).width()<520?28:48;
var time = document.getElementById('timer21Time').value;
var date = document.getElementById('timer21Date').value;
console.log(date+'T'+time);
$('.timerScript').timeTo({
    timeTo: new Date(date+'T'+time),
    countdown: true,
    displayDays: 2,
    theme: "white",
    displayCaptions: true,
    fontSize: fontSize,
    captionSize: 14,
    languages: {
        ru: {days: 'Дни', hours: 'Часы', min: 'Минуты', sec: 'Секунды'}
    },
    lang: 'ru'
});