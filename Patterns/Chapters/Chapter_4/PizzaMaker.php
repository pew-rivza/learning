<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 24.11.2019
 * Time: 0:04
 */

include_once __DIR__ . "/Stores/NYStylePizzaStore.php";
include_once __DIR__ . "/Stores/ChicagoStylePizzaStore.php";

class PizzaMaker
{
    static function main() {
        $NY_store = new NYStylePizzaStore();
        $Chicago_store = new ChicagoStylePizzaStore();

        echo "<br><strong>Пиццерия Нью-Йорка</strong><br>";
        $NY_store->orderPizza("cheese");
        echo "<br><br>";
        $NY_store->orderPizza("carbonara");
        echo "<br><br>";
        echo "<strong>Пиццерия Чикаго</strong><br>";
        $Chicago_store->orderPizza("cheese");
        echo "<br><br>";
        $Chicago_store->orderPizza("carbonara");
    }
}