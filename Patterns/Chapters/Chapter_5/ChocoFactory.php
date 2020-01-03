<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 03.01.2020
 * Time: 21:21
 */

include_once __DIR__ . "/ChocolateBoiler.php";

class ChocoFactory
{
    static function main() : void {
        $boiler = ChocolateBoiler::getInstance();

        $boiler->fill(); echo "<br>";
        $boiler->boil(); echo "<br>";
        $boiler->drain(); echo "<br><br>";

        $boiler->fill(); echo "<br>";
        $boiler->drain(); echo "<br>";
        $boiler->boil(); echo "<br>";
        $boiler->drain(); echo "<br>";

    }

}