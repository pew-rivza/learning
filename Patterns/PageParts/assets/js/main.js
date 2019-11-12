$(document).ready(function () {
    const body = 'body';

    $(body).on('click', '.menu-item', function (event) {
        const id = $(event.target).attr('id');
        const patternContainer = '.pattern-type-container';
        const menuItemSelection = '.selected-item-underline';
        const menuItem = '.menu-item#' + id;

        $(patternContainer).hide();
        $(patternContainer+'[data-id=' + id + ']').show();
        $(menuItemSelection).css({borderTop: '2px dashed #F7F7F7'});
        $(menuItem + ' + ' + menuItemSelection).css({borderTop: '2px dashed #000'});
    })
});