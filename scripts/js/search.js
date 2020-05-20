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