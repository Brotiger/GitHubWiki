$(document).ready(function() {
        $(".files_list").on("click",".file", function(e){    
            $url = $(this).attr("href");
            $('html, body').animate({
                scrollTop: $("#top").offset().top
            }, 0);
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
            e.preventDefault();
            return false;
        });
    });