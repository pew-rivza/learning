<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 07.01.2020
 * Time: 21:38
 */

class Garage
{
    public function up() : void {
        echo "Дверь поднимается...";
    }

    public function down() : void {
        echo "Дверь опускается...";
    }

    public function stop() : void {
        echo "Стоп!";
    }
}