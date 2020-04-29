$(document).ready(function () {
    let scrollLink = $('a[href ^= "#"]');

    scrollLink.click(function (event) {
        event.preventDefault();
        $('body, html').animate({
            scrollTop: $(this.hash).offset().top - 130
        }, 1500);
    });
});

