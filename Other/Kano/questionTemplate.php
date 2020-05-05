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
                <div class="option">Насколько вам понравится, если в продукте будет эта функция?</div>
                <div class="variant" data-code="<?= $number; ?>-1-1">Было бы круто иметь эту функцию!</div>
                <div class="variant" data-code="<?= $number; ?>-1-2">Я как бы ожидаю, что эта функция будет в продукте в
                    любом случае
                </div>
                <div class="variant" data-code="<?= $number; ?>-1-3">Да в целом все равно</div>
                <div class="variant" data-code="<?= $number; ?>-1-4">Ну, я не в восторге, но переживу</div>
                <div class="variant" data-code="<?= $number; ?>-1-5">Дичь какая-то, я не буду этим пользоваться!</div>
            </div>

            <div class="answers">
                <div class="option">Как вы отнесетесь к тому, если в продукте этой функции не будет вообще?</div>
                <div class="variant" data-code="<?= $number; ?>-2-1">Было бы круто, если бы этой функции не было!</div>
                <div class="variant" data-code="<?= $number; ?>-2-2">Я как бы ожидаю, что этой функции не будет в
                    продукте в любом случае
                </div>
                <div class="variant" data-code="<?= $number; ?>-2-3">Да в целом все равно</div>
                <div class="variant" data-code="<?= $number; ?>-2-4">Ну, я не в восторге, но переживу</div>
                <div class="variant" data-code="<?= $number; ?>-2-5">Дичь какая-то, эта функция необходима!</div>
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
