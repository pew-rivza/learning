<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 28.10.2019
 * Time: 21:56
 */

include_once __DIR__ . "/../Beverage.php";

class Glace extends Beverage
{
    public function __construct()
    {
        $this->set_description("Глясе");
    }

    public function cost(): float
    {
        return 260;
    }
}