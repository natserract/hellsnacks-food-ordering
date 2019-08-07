//DISABLE right click 

document.onkeydown = function(e) {
    if (event.keyCode == 123) {
        return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
        return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
        return false;
    }
    if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
        return false;
    }
    if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
        return false;
    }
}


$(document).ready(function() {

    /* Scroll to the top & show the button*/
    var link,
        toggleScrollTopLink = function() {
            if ($('body').scrollTop() > 200 || $('html').scrollTop() > 200) {
                link.fadeIn(600);
            } else {
                link.fadeOut(600);
            }
        };

    link = $('.scroll-top-link');
    
    

    $(window).scroll(toggleScrollTopLink);

    toggleScrollTopLink();
    link.on('click', function() {
        $('body').animate({
            scrollTop: 0
        });
        $('html').animate({
            scrollTop: 0
        });
    });

    $('.itemAdd').click(function() {
        //loading text
        var btn = $(this);
        btn.button('loading');
        setTimeout(function() {
            btn.button('reset');
        }, 500);


    });


    /* Tooltip */
    $("[data-toggle='tooltip']").tooltip();

    /* Disable Auto Complete */
    $(document).on('focus', ':input', function() {
        $(this).attr('autocomplete', 'off');
    });


    /* Disable Zooming */
    $(document).keydown(function(event) {
        if (event.ctrlKey == true && (event.which == '61' || event.which == '107' || event.which == '173' || event.which == '109' || event.which == '187' || event.which == '189')) {
            event.preventDefault();
        }
    });
    $(window).bind('mousewheel DOMMouseScroll', function(event) {
        if (event.ctrlKey == true) {
            event.preventDefault();
        }
    });

});


$(document).ready(function () {
    /* Remember My Password */
    var remember = $.cookie('remember');
    if(remember == 'true'){
        var username = $.cookie('user_login');
        var password = $.cookie('user_pass');

        $('#user_login').val(username);
        $('#user_pass').val(password);
    }

    $('#loginform').submit(function(){
        if($('#remember').is(':checked')){
            var username = $('#user_login').val();
            var password = $('#user_pass').val();

            $.cookie('user_login', username, {expires:14});
            $.cookie('user_pass', password, {expires:14});
            $.cookie('remember', true, {expires:14});
        } else {
            // reset cookies
            $.cookie('user_login', null);
            $.cookie('user_pass', null);
            $.cookie('remember', null);
        }
    });
});
