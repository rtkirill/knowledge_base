$(document).ready(function () {
    // Open & close slidedown left menu
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

    // Open active section and highlighting
    var detailId = $(".news-detail_id").attr("id");
    var elem = $("[data-id="+detailId+"]");
    elem.addClass("active_inner");
    elem.closest('.left_aside__sec-title_js').addClass("active");
    if(sec.hasClass("active") && elem.length>0) {
        elem.closest('.left_aside__sec-title_js').find("ul").show();
    }
});