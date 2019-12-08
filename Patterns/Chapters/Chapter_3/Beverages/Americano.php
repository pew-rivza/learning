<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 28.10.2019
 * Time: 21:53
 */

include_once __DIR__ . "/../Beverage.php";

class Americano extends Beverage
{
    public function __construct()
    {
        $this->set_description("Америcано");
    }

    public function cost(): float
    {
        return 120;
    }
}