<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 12.01.2020
 * Time: 21:45
 */

class TV
{
    public function on() : void {
        echo "Включаем телевизор...";
    }

    public function off() : void {
        echo "Телевизор выключен.";
    }

    public function set_channel($channel) : void {
        echo "Установлен канал №$channel";
    }

    public function set_volume($volume) : void {
        echo "Установлена громкость $volume%";
    }
}