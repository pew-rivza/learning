<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 16:11
 */

class Screen
{
    public function up() : string {
        return "Поднимаем экран...";
    }

    public function down() : string {
        return "Опускаем экран...";
    }
}