$(document).ready( function() {

    $("#imageEvent li").mouseenter(
        function(){
            $(this).children('.titreImage').fadeIn(100);
        }).mouseleave(
        function(){
            $(this).children('.titreImage').fadeOut(100);
        });

    $("#imageEvent li").click(function(){
            $("#imageEvent li span").fadeOut(100);
            $("#popup").html($(this).children("img").clone());
            //$(".commentaireImage").attr("style","display:inline");
            $("#dark-background").show();
            $("#popup").animate({
                height: "toggle"
            });
    });

    $("#dark-background, #popup").click(function(){
        	//$(".commentaireImage").attr("style","display:none");
            $("#popup").animate({
                height: "toggle"
            }, function(){
                $("#dark-background").hide();
            });
    });
    
    $(".row-fluid .span10 .tImg:first").attr("style","text-align:left");
});