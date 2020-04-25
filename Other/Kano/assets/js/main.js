$(document).ready(function () {
    const body = 'body';
    console.log("ddd");

    $(body).on('click', 'button.link', function (event) {
        const linkTo = $(event.target).attr('data-href');
        $('.page').hide();
        $('.page' + linkTo).show();
    });

    $(body).on('click', '.question .answers .variant', function (event) {
        const parent = $(event.target).closest(".answers");
        $(parent).find(".variant").removeClass("selected");
        $(event.target).addClass("selected");
    })
});