<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 28.10.2019
 * Time: 22:14
 */

include_once __DIR__ . "/../Beverage.php";

class Marshmallow extends Beverage
{
    private $beverage;
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function cost(): float
    {
        return 0.70 + $this->beverage->cost();
    }

    public function get_description(): string
    {
        return $this->beverage->get_description() . ", маршмеллоу";
    }
}