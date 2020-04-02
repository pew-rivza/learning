<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 16:22
 */

class Projector
{
    private $dvd;

    public function __construct(DVDPlayer $dvd)
    {
        $this->dvd = $dvd;
    }

    public function on() : string {
        return "Включаем проектор...";
    }

    public function off() : string {
        return "Выключаем проектор...";
    }

    public function setTVMode() : string {
        return "Уставнавливаем режим TV...<br>" .
        $this->dvd->setTwoChannelAudio();
    }

    public function setWideScreenMode() : string {
        return "Уставнавливаем полноэкранный режим<br>" .
        $this->dvd->setSurroundAudio();
    }
}