<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 28.10.2019
 * Time: 22:26
 */

include_once __DIR__ . "/Beverages/Espresso.php";
include_once __DIR__ . "/Condiments/Choco.php";
include_once __DIR__ . "/Condiments/Marshmallow.php";

class CoffeeShop
{
    public static function main() {
        $beverage = new Marshmallow(new Choco(new Choco(new Espresso())));

        echo $beverage->get_description() .
            ".<br>" . $beverage->cost() . " рублей.";
    }
}