

function showMenu(checkbox){
    if(checkbox.checked){
        openMenu();
    }
    else {
       closeMenu(false);
    }
}

function openMenu(){
    var width = $(window).width();
    if (width <= 764) {
        $('#header').css(
            {
                position: 'fixed',
                background: '#1B1B1C',
                flexDirection: 'column',
                justifyContent: 'space-evenly',
                top: '0',
                bottom: '0',
                left: '0',
                right: '0'
            });
        $('.modal').css({paddingRight:'0px'});
        $('#header_social_block').css({
            display: 'block'
        });
        $('#header_button').css({
            display: 'block'
        });

        $('#header_agile_block').css({
            justifyContent: 'start',
            width: 'inherit'
        });
        $('#navigation_block').css({
            display: 'flex',
            flexDirection: 'column',
            alignItems: 'center',
            flexWrap: 'wrap',
            width: '100%'
        });
    }
}

function closeMenu(click){
    var logo = document.getElementById('checkbox4');
    if(click && logo.checked){
        $('#checkbox4').click();
    }

    var width = $(window).width();
    if (width <= 764) {
        $('#header').css(
            {
                position: 'fixed',
                background: '#1B1B1C',
                flexDirection: 'row',
                justifyContent: 'start',
                top: 'auto',
                bottom: 'auto',
                left: 'auto',
                right: 'auto'
            });
        $('.modal').css({paddingRight:'0px'});
        $('#header_social_block').css({
            display: 'none'
        });
        $('#header_button').css({
            display: 'none'
        });

        $('#header_agile_block').css({
            height: 'auto',
            width:'auto',
            justifyContent: 'space-between'
        });
        $('#navigation_block').css({
            display: 'none',
            flexDirection: 'row',
            alignItems: 'center',
            justifyContent:'center'
        });
    }
}

$(document).ready(function() {
    checkWidth();
    $(window).resize(checkWidth);

    $(document).scroll(() => {
                var width = $(window).width();
                var top = $(document).scrollTop();

                if (width > 764) {
                    $('#start_block').css({backgroundPositionY: '-' + (top / 1.5) + 'px'});
                    if (top > 220) {
                        $('#header').css({
                            position: 'fixed',
                            background: '#1B1B1C',
                            marginTop: '0px'
                        });
                    } else if (top < 220 && top > 200) {

                        $('#header').css({
                            marginTop: '-100px',
                            background: 'none'
                        });
                    } else if (top < 200) {
                        $('.modal').css({paddingRight:'0px'});
                        $('#header').css({
                            position: 'absolute',
                            background: 'none',
                            marginTop: '0px'
                        });
                    }
                }
            });

    function checkWidth() {
        var width = $(window).width();
        var logo = document.getElementById('checkbox4');
        if (width <= 764 && !logo.checked) {
            $('.modal').css({paddingRight:'0px'});
            $('#header').css({
                position: 'fixed',
                background: '#1B1B1C',
                marginTop: 'auto'
            });
            $('#header_social_block').css({
                display: 'none'
            });
            $('#header_button').css({
                display: 'none'
            });

            $('#navigation_block').css({
                display: 'none'
            });
            $('#header_agile_block').css({flexDirection: 'column'});
        }else if(width <= 764 && logo.checked){
            $('#checkbox4').click();
        }
        else if(width>764){
            $('#header').css({
               justifyContent: 'space-between',
                flexDirection: 'row'
            });
            if(width>1080){
                $('#header_agile_block').css({
                    flexDirection: 'row',
                    justifContent: 'space-between',
                    width: '65%'});
                $('#navigation_block').css({
                    justifyContent:'flex-end',
                    flexDirection:'row'
                });
            }else {
                $('#header_agile_block').css({flexDirection: 'column'});
                $('#navigation_block').css({
                    justifyContent:'center',
                });
            }
            if(width<900){
                $('#header_agile_block').css({ width: 'auto'});
            }else {
                $('#header_agile_block').css({ width: '65%'});
            }

            $('#header').css({
                        position: 'absolute',
                        background: 'none',
                        marginTop: '0px',
                        top:'auto',
                        bottom:'auto',
                        left:'auto',
                        right:'auto'

                    });
            $('body').css(
                {
                    overflow:''
                });
            $('.modal').css({paddingRight:'0px'});
            $('#header_social_block').css({
                display: 'block'
            });
            $('#header_button').css({
                display: 'block'
            });

            $('#header_agile_block').css({
                display: 'flex',
                justifContent: 'space-between',
                alignItems: 'center'
            });
            $('#navigation_block').css({
                display: 'flex',
            });
        }
    }

});

