! function (a) {
    "use strict";
    a("html, body");
    a(".lnk-toggler").on("click", function (t) {
        t.preventDefault();
        var e = a(this).data("panel");
        a(".authfy-panel.active").removeClass("active"), a(e).addClass("active")
    }), a("#forget-lnk").on("click", function () {
        a(".authfy-login .nav-tabs").find("li").removeClass("active")
    }), a(window).on("load", function () {
        a(".square-block").fadeOut(), a("#preload-block").fadeOut("slow", function () {
            a(this).remove()
        })
    })
}(jQuery);
