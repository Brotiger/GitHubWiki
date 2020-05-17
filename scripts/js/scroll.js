$(document).ready(function() {
     $(".up").on("click", function(e){//e событие клика
        var anchor = $(this);
        $('html, body').animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 777);
        e.preventDefault();
        return false;
    });
});