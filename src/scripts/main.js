jQuery(document).ready(function () {
    jQuery(document).on("click", "._mobile-nav", function () {
        jQuery(".aty__nav").fadeIn("500");
    });
    jQuery(document).on("click", "._close", function () {
        jQuery(".aty__nav").fadeOut("500");
    });
});