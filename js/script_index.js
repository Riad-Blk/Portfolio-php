jQuery(function(){
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 200 ) { 
                $('#scroll-up').css('right','20px');
            } else { 
                $('#scroll-up').removeAttr('style');
            }
        });
    });
});
$(document).ready(function() {
    $("a[href*='#']:not([href='#'])").click(function() {
        if (location.hostname == this.hostname && this.pathname.replace(/^\//,"") == location.pathname.replace(/^\//,"")) {
            var anchor = $(this.hash);
            anchor = anchor.length ? anchor : $("[name=" + this.hash.slice(1) +"]");
            if (anchor.length) {
                $("html, body").animate({ scrollTop: anchor.offset().top }, 1000);
            }
        }
    });
});

