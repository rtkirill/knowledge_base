$(document).ready(function () {
    // Open & close slidedown left menu
    var sec = $(".left_aside__sec-title_js");

    sec.on("click", function () {
        if (!$(this).hasClass("active")) {
            sec.removeClass("active");
            sec.find("ul").hide(200);
            $(this).addClass("active");
            $(this).find("ul").slideDown(200);
        } else {
            $(this).removeClass("active");
            $(this).find("ul").hide(200);
        }
    });

    // Open active section and highlighting
    var detailId = $(".news-detail_id").attr("id");
    var elem = $("[data-id=" + detailId + "]");
    elem.addClass("active_inner");
    elem.closest('.left_aside__sec-title_js').addClass("active");
    if (sec.hasClass("active") && elem.length > 0) {
        elem.closest('.left_aside__sec-title_js').find("ul").show();
    }

    // Open email popup on detail
    $("#faq-send-link-to-email").click(function (e) {
        e.preventDefault();
        $(".faq-popup-email-wrap").toggle(200);
    });

    //Send Email
    $('#faq-send-email').on('submit', function (e) {
        e.preventDefault();

        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        var address = $(this).find("input[name=faq_email]").val();

        if (reg.test(address) == false) {
            $('.faq-email--error').show(100);
            return false;
        } else {
            $.ajax({
                type: "POST",
                url: "/includes/faq-mail.php",
                dataType: "json",
                data: {
                    'faq_name': $('input[name=faq_name]').val(),
                    'faq_link': $('input[name=faq_link]').val(),
                    'faq_email': $('input[name=faq_email]').val(),
                },
                success: function (response) {
                    if(response) {
                        $('#faq-send-email').hide();
                        $('.faq-email--success').show(100);
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(thrownError);
                }
            });
        }

    });

    //Create page to print
    $("#print").click(function (e) {
        e.preventDefault();
        console.log(123);
        var html_to_print = $('.print_version').html();
        var iframe = $('<iframe id="print_frame">');
        $('body').append(iframe);
        var doc = $('#print_frame')[0].contentDocument || $('#print_frame')[0].contentWindow.document;
        var win = $('#print_frame')[0].contentWindow || $('#print_frame')[0];
        doc.getElementsByTagName('body')[0].innerHTML = html_to_print;
        win.print();
        $(iframe).remove();
    });

    //Init highlightCode
    hljs.initHighlightingOnLoad();
    hljs.configure({useBR: true});

    $('div.code-block').each(function (i, block) {
        hljs.highlightBlock(block);
    });

    //Init magnific popup (lightbox)
    $(document).ready(function () {
        $('.image-lightbox').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            mainClass: 'mfp-img-mobile',
            image: {
                verticalFit: true
            }
        });
    });
    //For lightbox get img src to put in <a> href wrapper
    $('.image-lightbox').attr("href", $('.image-lightbox').find("img").attr("src"));


    //Show and hide block for property in visual editor
    $(".full_text").click(function () {
        if (!$(this).hasClass("open")) {
            $(this).find("p").slideDown(200);
            $(this).addClass("open");
        } else {
            $(this).find("p").slideUp(200);
            $(this).removeClass("open");
        }
    });

    //Set list right menu on detail
    arTitles = [];
    $(".news-detail").find("h2").each(
        function (i, elem) {
            $(elem).attr("id", "title" + i);
            $(".right_aside_list_js").append(
                "<li class='list_link'>" +
                "<a href='#title" + i + "'>" + $(elem).text() + "</a>" +
                "</li>"
            );
            arTitles.push(elem);
            $(".right_aside_list_js").addClass("nav");
        }
    );

    //Scrollspy right menu on detail
    var menu_selector = "";
    if ($(".aside_right_responsive").is(":visible"))
        menu_selector = "#spy_menu"; //Menu id
    else
        menu_selector = "#spy_menu2"; //Menu id мобильная версия

    var menu_offset_top = 70; // Top offset
    function onScroll() {
        var scroll_top = $(document).scrollTop() + menu_offset_top;
        $(menu_selector + " li").each(function () {
            var hash = $(this).find("a").attr("href");
            var target = $(hash);
            if (target.position().top <= scroll_top) {
                $(menu_selector + " li.active").removeClass("active");
                $(this).addClass("active");
            } else {
                $(this).removeClass("active");
            }
        });
    };

    $(document).on("scroll", onScroll);
    $(".list_link").click(function (e) {
        e.preventDefault();
        $(document).off("scroll");
        $(menu_selector + " li.active").removeClass("active");
        $(this).addClass("active");
        var hash = $(this).find("a").attr("href");
        var target = $(hash);
        $("html, body").animate({
            scrollTop: (target.offset().top - menu_offset_top)
        }, 0, function () {
            window.location.hash = hash;
            $(document).on("scroll", onScroll);
        });
    });


    // Toggle mobile menu
    $(".mobile_menu_button").on("click", function () {
        $(".mobile_menu").toggle();
    });
    // Toggle mobile menu on detail
    $(".mobile_menu_detail_button").on("click", function () {
        $(".mobile_menu_detail").toggle();
    });

    // Close button action
    $(".close_menu_btn").on("click", function () {
        $(this).parent().hide();
    });

    // Resize reCAPTCHA
    if ($(window).width() < 768) {
        $(".g-recaptcha").attr("data-size", "compact");
    }

    // Open review form on detail
    $('.answer_radio input').on('click', function () {
        var radioID = $(this).attr('id'),
            goodBlock = $('.faq_rew_field__good'),
            badBlock = $('.faq_rew_field__bad');
        if (radioID === 'faq_good') {
            goodBlock.addClass('open');
            badBlock.removeClass('open');
        } else if (radioID === 'faq_bad') {
            badBlock.addClass('open');
            goodBlock.removeClass('open');
        }
        console.log(radioID);
    });

});