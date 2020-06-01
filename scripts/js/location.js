$(document).ready(function(){
    var url = window.location.pathname;
    url = url.substr(1);

    if(url == 'documentation'){
        $("#sidebarMenu > div > ul > li:nth-of-type(1) span")[0].click();
        $("#sidebarMenu > div > ul > li:first-of-type a")[0].click();
    }else if(url == "for_investors"){
        $("#sidebarMenu > div > ul > li:nth-of-type(3) span")[0].click();
        $("#sidebarMenu > div > ul > li:nth-of-type(3) a")[0].click();
    }else if(url == "economy"){
        $("#sidebarMenu > div > ul > li:nth-of-type(2) span")[0].click();
        $("#sidebarMenu > div > ul > li:nth-of-type(2) a")[0].click();
    }
});