<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 14:15
 */

include_once __DIR__ . "/../Interfaces/RealDuck.php";

class WildDuck implements RealDuck
{

    public function quack(): void
    {
        echo "Я крякаю.";
    }

    public function fly(): void
    {
        echo "Я летаю далеко.";
    }

    public function display(): void
    {
        echo "Я настоящая дикая утка.";
    }
}