<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 28.10.2019
 * Time: 21:42
 */

include_once __DIR__ . "/../Beverage.php";

class Espresso extends Beverage
{
    public function __construct()
    {
        $this->set_description("Эспрессо");
    }

    public function cost(): float
    {
        return 130;
    }
}