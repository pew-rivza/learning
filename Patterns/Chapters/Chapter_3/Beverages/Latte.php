<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 28.10.2019
 * Time: 21:51
 */

include_once __DIR__ . "/../Beverage.php";

class Latte extends Beverage
{
    public function __construct()
    {
        $this->set_description("Латте");
    }

    public function cost(): float
    {
        return 2.99;
    }
}