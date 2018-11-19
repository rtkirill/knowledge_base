$(document).ready(function () {
    var sec = $(".left_aside__sec-title_js");
    sec.on("click", function () {
        if(!$(this).hasClass("active")) {
            $(this).addClass("active");
            $(this).find("ul").slideDown(200);
        } else {
            $(this).removeClass("active");
            $(this).find("ul").hide(200);
        }
    });
});