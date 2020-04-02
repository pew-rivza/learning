<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 16:43
 */

include_once __DIR__ . "/HomeTheaterFacade.php";

class HomeTheater
{
    public static function main() {
        $home_theater = new HomeTheaterFacade();
        ?>
        <div class="movie-toolbar">
            <div class="tool" id="watch-movie">Посмотреть фильм</div>
            <div class="tool" id="end-movie">Закончить просмотр</div>
        </div>
        <div id="facade-watch-movie" class="facade-screen">
            <?php $home_theater->watchMovie(); ?>
            Приятного просмотра!
        </div>

        <div id="facade-end-movie" class="facade-screen">
            <?php $home_theater->endMovie(); ?>
            Смотрите еще!
        </div>
        <?php
    }
}