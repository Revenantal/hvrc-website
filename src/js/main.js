
$( document ).ready(function() {

    var $header = $('nav');
    var stickyNavPoint = $header.offset().top + $header.outerHeight() + 200;
    var stickyNavActive = stickyNavPoint + 200;

    window.onscroll = function() {toggleStickyHeader()};
    toggleStickyHeader();

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function toggleStickyHeader() {
        if (window.pageYOffset > stickyNavActive && !$header.hasClass("is-sticky hidden")) {
            $header.addClass("is-sticky");
        } else if (window.pageYOffset > stickyNavActive) {
            $header.removeClass("hidden");
        } else if (window.pageYOffset > stickyNavPoint) {
            $header.addClass("is-sticky hidden");
        } else {
            $header.removeClass("is-sticky hidden");
        }
    }
});