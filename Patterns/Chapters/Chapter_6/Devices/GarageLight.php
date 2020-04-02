<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 07.01.2020
 * Time: 21:08
 */

include_once __DIR__ . "/Light.php";

class GarageLight implements Light
{
    public function on() :void {
        echo "Включаем свет в гараже!";
    }

    public function off() :void {
        echo "Свет в гараже отключен.";
    }
}