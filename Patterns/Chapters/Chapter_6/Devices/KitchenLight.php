<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 07.01.2020
 * Time: 21:08
 */

include_once __DIR__ . "/Light.php";

class KitchenLight implements Light
{
    public function on() :void {
        echo "Включаем свет на кухне!";
    }

    public function off() :void {
        echo "Свет на кухне отключен.";
    }
}