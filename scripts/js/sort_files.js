$(document).ready(function() {
    $('#sidebarMenu > div ul li').each(function() {
            if(!$(this).children("span").length > 0){
                $(this).prependTo( $(this).parent("ul") );
            }
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