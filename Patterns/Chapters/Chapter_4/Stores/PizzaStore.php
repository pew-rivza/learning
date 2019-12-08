<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 23.11.2019
 * Time: 21:43
 */

abstract class PizzaStore
{
    abstract protected function create_pizza(string $type): Pizza;

    public final function orderPizza($type): Pizza {
        $pizza = $this->create_pizza($type);

        $pizza->prepare(); echo  "<br>";
        $pizza->bake(); echo "<br>";
        $pizza->cut(); echo "<br>";
        $pizza->box(); echo "<br>";
        echo "Готово!";

        return $pizza;
    }
}