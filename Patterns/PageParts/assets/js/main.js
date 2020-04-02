$(document).ready(function () {
    const body = 'body';

    $(body).on('click', '.menu-item', function (event) {
        const id = $(event.target).attr('id');
        const patternContainer = '.pattern-type-container';
        const menuItemSelection = '.selected-item-underline';
        const menuItem = '.menu-item#' + id;
        const mainContainer = '#main';

        $(patternContainer).hide();
        $(mainContainer).hide();
        $(patternContainer+'[data-id=' + id + ']').show();
        $(menuItemSelection).css({borderTop: '2px dashed #F7F7F7'});
        $(menuItem + ' + ' + menuItemSelection).css({borderTop: '2px dashed #000'});
    });

//-----------------------------------------------------

    $(body).on('click', '#watch-movie', function () {
        $("#facade-end-movie").hide();
        $("#facade-watch-movie").show();
    });

    $(body).on('click', '#end-movie', function () {
        $("#facade-watch-movie").hide();
        $("#facade-end-movie").show();
    });

//-----------------------------------------------------

    $(body).on('click', '.main-page-section-header', function () {
        $(this).next().toggle();
        $(this).find("> .section-arrow-down, > .section-arrow-up").toggle();
    });

//-----------------------------------------------------

    $(body).on('click', '.main-page-link', function () {
        const patternContainers = '[data-id=behavioral], [data-id=structural], [data-id=generative]';
        $(patternContainers).hide();
        $('.selected-item-underline').css({borderTop: '2px dashed #F7F7F7'});
        $('#main').show();
    });
});