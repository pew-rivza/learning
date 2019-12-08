<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 14.11.2019
 * Time: 23:52
 */

include_once __DIR__ . "/Beverage.php";

class Decorator extends Beverage
{
    protected $beverage;
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost(): float {
        return $this->beverage->cost();
    }
}