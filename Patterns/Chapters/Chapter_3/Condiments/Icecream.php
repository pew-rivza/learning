<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 28.10.2019
 * Time: 22:17
 */

include_once __DIR__ . "/../Decorator.php";

class Icecream extends Decorator
{
    public function cost(): float
    {
        return 30 + $this->beverage->cost();
    }

    public function get_description(): string
    {
        return $this->beverage->get_description() . ", мороженое";
    }
}