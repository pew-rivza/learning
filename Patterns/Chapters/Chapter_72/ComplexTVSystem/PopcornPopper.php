<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 16:07
 */

class PopcornPopper
{
    public function on() : string {
        return "Включаем попкорнер...";
    }

    public function off() : string {
        return "Выключаем попкорнер...";
    }

    public function pop() : string {
        return "Запускаем приготовление попкорна...";
    }
}