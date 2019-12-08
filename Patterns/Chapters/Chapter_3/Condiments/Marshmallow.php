<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 28.10.2019
 * Time: 22:14
 */

include_once __DIR__ . "/../Decorator.php";

class Marshmallow extends Decorator
{

    public function cost(): float
    {
        return 50 + $this->beverage->cost();
    }

    public function get_description(): string
    {
        return $this->beverage->get_description() . ", маршмеллоу";
    }
}