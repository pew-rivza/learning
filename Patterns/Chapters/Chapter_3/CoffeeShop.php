<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 28.10.2019
 * Time: 22:26
 */

include_once __DIR__ . "/Beverages/Espresso.php";
include_once __DIR__ . "/Beverages/Latte.php";
include_once __DIR__ . "/Condiments/Choco.php";
include_once __DIR__ . "/Condiments/Marshmallow.php";
include_once __DIR__ . "/Condiments/Icecream.php";
include_once __DIR__ . "/Condiments/Almond.php";

class CoffeeShop
{
    public static function main() {
        $beverage1 = new Almond(new Icecream(new Espresso()));
        $beverage2 = new Marshmallow(new Choco(new Latte()));

        echo $beverage1->get_description() . ". " . $beverage1->cost() . " рублей.<br>";
        echo $beverage2->get_description() . ". " . $beverage2->cost() . " рублей.<br>";
        echo "Сумма заказа: " . ($beverage1->cost() + $beverage2->cost()) . " рублей.";
    }

}