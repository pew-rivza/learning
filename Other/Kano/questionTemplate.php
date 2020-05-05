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
                <div class="option">А что, если эта функция будет в приложении?</div>
                <div class="variant" data-code="<?= $number; ?>-1-1">Круто!</div>
                <div class="variant" data-code="<?= $number; ?>-1-2">Так и должно быть</div>
                <div class="variant" data-code="<?= $number; ?>-1-3">Все равно</div>
                <div class="variant" data-code="<?= $number; ?>-1-4">Переживу, но...</div>
                <div class="variant" data-code="<?= $number; ?>-1-5">Дичь какая-то!</div>
            </div>

            <div class="answers">
                <div class="option">А если ее не будет вообще?</div>
                <div class="variant" data-code="<?= $number; ?>-2-1">Круто!</div>
                <div class="variant" data-code="<?= $number; ?>-2-2">Так и должно быть</div>
                <div class="variant" data-code="<?= $number; ?>-2-3">Все равно</div>
                <div class="variant" data-code="<?= $number; ?>-2-4">Переживу, но...</div>
                <div class="variant" data-code="<?= $number; ?>-2-5">Дичь какая-то!</div>
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
