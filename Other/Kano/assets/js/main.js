$(document).ready(function () {
    const body = 'body';
    console.log("ddd");

    $(body).on('click', 'button.link', function (event) {
        const linkTo = $(event.target).attr('data-href');
        $('.page').hide();
        $(window).scrollTop(0);
        $('.page' + linkTo).fadeIn(400);

    });

    $(body).on('click', '.question .answers .variant', function (event) {
        const parent = $(event.target).closest(".answers");
        $(parent).find(".variant").removeClass("selected");
        $(event.target).addClass("selected");
    })
});