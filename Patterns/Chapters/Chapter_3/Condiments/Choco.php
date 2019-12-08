<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 28.10.2019
 * Time: 21:59
 */

include_once __DIR__ . "/../Decorator.php";

class Choco extends Decorator
{
    public function cost(): float
    {
        return 25 + $this->beverage->cost();
    }

    public function get_description(): string
    {
        return $this->beverage->get_description() . ", шоколад";
    }
}