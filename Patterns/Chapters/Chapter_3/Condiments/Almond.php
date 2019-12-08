<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 28.10.2019
 * Time: 22:22
 */

include_once __DIR__ . "/../Decorator.php";

class Almond extends Decorator
{
    public function cost(): float
    {
        return 40 + $this->beverage->cost();
    }

    public function get_description(): string
    {
        return $this->beverage->get_description() . ", миндаль";
    }
}