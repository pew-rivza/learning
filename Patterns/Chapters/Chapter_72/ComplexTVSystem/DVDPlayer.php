<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 16:12
 */

class DVDPlayer
{
    public function on() : string {
        return "Включаем DVD-проигрыватель...";
    }

    public function off() : string {
        return "Выключаем DVD-проигрыватель...";
    }

    public function play() : string {
        return "Запускаем DVD-проигрыватель...";
    }

    public function stop() : string {
        return "Останавливаем DVD-проигрыватель...";
    }

    public function setSurroundAudio() : string {
        return "Устанавливаем 360 звук...";
    }

    public function setTwoChannelAudio() : string {
        return "Устанавливаем двухканальный звук...";
    }
}