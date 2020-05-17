$(document).ready(function() {
        $("#sidebarMenu a").on("click", function(e){    
            $url = $(this).attr("href");
            e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: '/',
                    data: {url: $url},
                    success: function(response){
                        $("#hello").hide();
                        $("#info").empty();
                        $("#info").html(response);      
                    }
                });
        });
    });