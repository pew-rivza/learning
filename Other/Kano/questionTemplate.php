<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 05.05.2020
 * Time: 14:44
 *
 * @param $number
 * @param $function
 * @param $prevPage
 * @param $nextPage
 * @param $questionsNumber
 */

function questionTemplate($number, $function, $prevPage, $nextPage, $questionsNumber)
{
    ?>
    <div class="page question" id="question<?= $number; ?>">
        <div class="progress-bar">
            <div class="progress-line" style="width: calc(100% / <?= $questionsNumber; ?> * <?= $number; ?>)">
                <div class="progress-value"><?= $number . "/" . $questionsNumber; ?></div>
            </div>
        </div>

        <div class="content">
            <h2>Функция</h2>
            <div class="function">
                <?= $function; ?>
            </div>

            <div class="answers">
                <div class="option">Как вы отнесетесь к тому, если в приложении будет эта функция?</div>
                <div class="variant" data-code="<?= $number; ?>-1-1">Нравится</div>
                <div class="variant" data-code="<?= $number; ?>-1-2">Ожидаю этого</div>
                <div class="variant" data-code="<?= $number; ?>-1-3">Все равно</div>
                <div class="variant" data-code="<?= $number; ?>-1-4">Потерплю</div>
                <div class="variant" data-code="<?= $number; ?>-1-5">Не нравится</div>
            </div>

            <div class="answers">
                <div class="option">Как вы отнесетесь к тому, если в приложении НЕ будет этой функции?</div>
                <div class="variant" data-code="<?= $number; ?>-2-1">Нравится</div>
                <div class="variant" data-code="<?= $number; ?>-2-2">Ожидаю этого</div>
                <div class="variant" data-code="<?= $number; ?>-2-3">Все равно</div>
                <div class="variant" data-code="<?= $number; ?>-2-4">Потерплю</div>
                <div class="variant" data-code="<?= $number; ?>-2-5">Не нравится</div>
            </div>

            <div class="buttons-bar">
                <button class="link light" data-href="<?= $prevPage; ?>">Назад</button>

                <?php
                if ($number === $questionsNumber) {
                    ?>
                    <button id="submit">Закончить</button> <?php
                } else {
                    ?>
                    <button class="link" data-href="<?= $nextPage; ?>">Далее</button> <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php
}
