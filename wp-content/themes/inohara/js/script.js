function scrollToTop() {
    $(".pagetop").click(function() {
        $("html, body").animate({
                scrollTop: 0,
            },
            500
        );
    });
}
// scroll to top
scrollToTop();

function toggleMenu() {
    $("#header .menu-toggle").on("click", function() {
        $("#gNav").toggleClass("open");
        $(this).toggleClass("change");
    });
}
toggleMenu();

function removeMemuOnSp() {
    var windowSize = window.innerWidth;
    if ($("#gNav.open").length > 0 && windowSize > 768) {
        $("#gNav").removeClass("open");
        $(".menu-toggle").removeClass("change");
    }
}
//menu

// $(window).scroll(function (){
//     animation();
// });
$(window).resize(function() {
    // calculateTopPagePostion();
    removeMemuOnSp();
});
var $window = $(window);
var $body = $("body");
var $html = $("html");
var $bodyHtml = $("body,html");
var winwidth = window.innerWidth;
window.addEventListener("scroll", _handleScroll, false);

function _handleScroll() {
    $("#header").css({
        left: -window.scrollX + "px",
    });
}
$("#form").validate({
    focusInvalid: false,
    rules: {
        name: {
            required: true,
        },
        mail: {
            required: true,
        },
        textarea: {
            required: true,
        },
    },
    messages: {
        name: {
            required: "未入力です。",
        },
        mail: {
            required: "未入力です。",
            email: "入力に誤りがあります。",
        },
        textarea: {
            required: "未入力です。",
        },
    },

    // エラーメッセージ出力箇所
    errorPlacement: function(error, element) {
        var name = element.attr("name");
        if (element.attr("name") === name) {
            error.appendTo($(".is_error_" + name));
        }
    },

    errorElement: "span",
    errorClass: "is-error",
});
//form