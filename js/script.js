$(window).scroll(function () {

    var $window = $(window),
        $body = $('body'),
        $panel = $('.panel');
    $panel1 = $('.panel1');

    var scroll = $window.scrollTop() + ($window.height() / 3);

    $panel.each(function () {
        var $this = $(this);
        if ($this.position().top <= scroll && $this.position().top + $this.height() > scroll) {
            $body.removeClass(function (index, css) {
                return (css.match(/(^|\s)color-\S+/g) || []).join(' ');
            });
            $body.addClass('color-' + $(this).data('color'));
        }
    });

}).scroll();

var typed = new Typed('.typed', {
    strings: [
        "Developper.",
        "Designer."
    ],
    typeSpeed: 50,
    backSpeed: 50,
    loop: true
});

new kursor({
    type: 1,
    removeDefaultCursor: true
});

$(".contact").click(function () {
    $('html, body').animate({
        scrollTop: $("#contact").offset().top
    }, 1500);
});
$(".about").click(function () {
    $('html, body').animate({
        scrollTop: $("#about").offset().top
    }, 1500);
});
$(".portfolio").click(function () {
    $('html, body').animate({
        scrollTop: $("#portfolio").offset().top
    }, 1500);
});

document.getElementById('about').scrollIntoView();
document.getElementById('contact').scrollIntoView();
document.getElementById('portfolio').scrollIntoView();