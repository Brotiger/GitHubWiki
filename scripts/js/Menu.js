$(document).ready(function() {
$("#sidebarMenu li span").each(function(){
        $(this).on("click", function(){
            if($(this).children("i").hasClass("fa-folder")){
                $(this).children("i").removeClass("fa-folder");
                $(this).children("i").addClass("fa-folder-open");

            }else{
                $(this).children("i").removeClass("fa-folder-open");
                $(this).children("i").addClass("fa-folder");
            }
           $(this).next('ul').slideToggle(500);
        });
    });
    var button_arr = $("#sidebarMenu li a.file").each(function(){
        $(this).on("click", function(){
            $("#sidebarMenu").removeClass("show");
        });
    });
$("#sidebarMenu li a.file").each(function(){
    $(this).on("click", function(){
        $("#sidebarMenu li a.file").each(function(){
            $(this).children('i').removeClass("fas");
            $(this).children('i').removeClass("fa-file-alt");
            $(this).children('i').addClass("far");
            $(this).children('i').addClass("fa-file");
        });
        $(this).children('i').addClass("fas");
        $(this).children('i').addClass("fa-file-alt");
    });
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