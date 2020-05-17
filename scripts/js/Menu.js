$(document).ready(function() {
$("#sidebarMenu li span").each(function(){
        $(this).on("click", function(){
            if($(this).prev("i").hasClass("fa-folder")){
                $(this).prev("i").removeClass("fa-folder");
                $(this).prev("i").addClass("fa-folder-open");

            }else{
                $(this).prev("i").removeClass("fa-folder-open");
                $(this).prev("i").addClass("fa-folder");
            }
           $(this).next('ul').slideToggle(500);
        });
    });
    var button_arr = $("#sidebarMenu li a").each(function(){
        $(this).on("click", function(){
            $("#sidebarMenu").removeClass("show");
        });
    });
$("#sidebarMenu li a").each(function(){
    $(this).on("click", function(){
        $("#sidebarMenu li a").each(function(){
            $(this).prev('i').removeClass("fas");
            $(this).prev('i').removeClass("fa-file-alt");
            $(this).prev('i').addClass("far");
            $(this).prev('i').addClass("fa-file");
        });
        $(this).prev('i').addClass("fas");
        $(this).prev('i').addClass("fa-file-alt");
    });
});
});