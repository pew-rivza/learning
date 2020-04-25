$(document).ready(function () {
    const body = 'body';

    $(body).on('click', 'button.link', function (event) {
        const linkTo = $(event.target).attr('data-href');
        $('.page').hide();
        $(window).scrollTop(0);
        $('.page' + linkTo).fadeIn(400);

    });

    $(body).on('click', '.question .answers .variant', function (event) {
        const parent = $(event.target).closest('.answers');
        $(parent).find('.variant').removeClass('selected');
        $(event.target).addClass('selected');
    });

    $(body).on('click', '#submit', function () {
        const answersElements = $('.question .answers .variant.selected');
        const answers = [];

        if (answersElements.length < 46) {
            alert(`Невозможно закончить опрос, так как Вы не ответили на часть вопросов`);
        } else {
            for (let i = 0; i < answersElements.length; i++) {
                answers.push($(answersElements[i]).attr('data-code'));
            }
        }

        $.ajax({
            url: '/Other/Kano/assets/php/submit.php',
            type: 'POST',
            data: {answers: answers.toString()},
            success(data) {
                if (data) {
                    $('.page').hide();
                    $(window).scrollTop(0);
                    $('.page#thanks').fadeIn(400);
                } else {
                    alert("Не удалось отправить данные")
                }
            },
            error() {
                alert("На сервере произошла ошибка")
            }
        });
    });
});