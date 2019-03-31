var width = $(window).width();
if(width<670){
   var block = document.getElementById('videos_content');
   block.style.backgroundImage = "url('http://mini.s-shot.ru/?https://www.youtube.com/embed/MII0DfyZo8Y')";
}else {
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('videos_content', {
            videoId: 'MII0DfyZo8Y',
            playerVars: {
                'autoplay': 1,
                'controls': 0,
                'enablejsapi': 1,
                'iv_load_policy': 3,
                'rel': 0,
                'showinfo': 0,
                'modestbranding': 1,
                'loop': 1
            },
            events: {
                'onReady': onPlayerReady,
            }
        });
    }

// 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
        event.target.playVideo();
        event.target.mute();
    }
}

