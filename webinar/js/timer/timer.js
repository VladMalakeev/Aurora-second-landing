var fontSize = $(window).width()<520?28:48;
var time = document.getElementById('timerTime').value;
var date = document.getElementById('timerDate').value;
$('.timerScript').timeTo({
    timeTo: new Date(date+'T'+time),
    countdown: true,
    displayDays: 2,
    theme: "white",
    displayCaptions: true,
    fontSize: fontSize,
    captionSize: 14,
    languages: {
        ru: {days: 'Дни', hours: 'Часы', min: 'Минуты',sec:'Секунды'}
    },
    lang: 'ru'
});