$(document).ready(function() {
    $("#search").keypress(function(event){
       var $search = $(this).val();
       if(event.which == 13 && $search && $search.trim() !== ""){
           $("#search").attr("disabled", "true");
           $("#hello").hide();
           $("#info").empty();
           $("#info").html("<i class='fas fa-sync-alt'></i> Идет поиск по сайту..."); 
            $.ajax({
                    type: 'POST',
                    url: '/',
                    data: {search: $search},
                    success: function(response){
                        $("#search").removeAttr("disabled");
                        $("#hello").hide();
                        $("#info").empty();
                        $("#info").html(response);      
                    }
                });
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