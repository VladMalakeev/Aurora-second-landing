var fontSize = $(window).width()<520?28:48;
$('.timerScript').timeTo({
    timeTo: new Date('2019-05-12T23:59:59'),
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