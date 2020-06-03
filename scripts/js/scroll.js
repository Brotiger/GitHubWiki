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
/*
        © 2020 Берестнев Дмитрий Дмитриевич 
        Контактная информация:
        VK: https://vk.com/brotiger63
        mail: dimka@bdima.ru
        GitHub: https://github.com/Brotiger
        Telegram: @Brotiger63
*/