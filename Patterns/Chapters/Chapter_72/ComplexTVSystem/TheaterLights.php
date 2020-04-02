<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 16:03
 */

class TheaterLights
{
    public function on() : string {
        return "Включаем свет...";
    }

    public function off() : string {
        return "Выключаем свет...";
    }

    public function dim(int $brightness) : string {
        return "Устанавливаем яркость света на $brightness";
    }
}