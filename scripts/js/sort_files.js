$(document).ready(function() {
    $('#sidebarMenu > div ul li').each(function() {
            if(!$(this).children("span").length > 0){
                console.log($(this));
                $(this).prependTo( $(this).parent("ul") );
            }
        });
});