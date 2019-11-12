<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 28.10.2019
 * Time: 22:17
 */

include_once __DIR__ . "/../Beverage.php";

class Icecream extends Beverage
{
    private $beverage;
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost(): float
    {
        return 0.49 + $this->beverage->cost();
    }

    public function get_description(): string
    {
        return $this->beverage->get_description() . ", мороженое";
    }
}