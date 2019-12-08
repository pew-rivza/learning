<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 01.12.2019
 * Time: 13:52
 */

include_once __DIR__ . "/PizzaStore.php";
include_once __DIR__ . "/../IngredientFactories/NYStylePizzaIngredientFactory.php";
include_once __DIR__ . "/../Pizzas/CheesePizza.php";
include_once __DIR__ . "/../Pizzas/Carbonara.php";

class NYStylePizzaStore extends PizzaStore
{
    protected function create_pizza(string $type): Pizza
    {
        $pizza_ingredient_factory = new NYStylePizzaIngredientFactory();
        $pizza = null;

        if($type === "cheese") {
            $pizza = new CheesePizza($pizza_ingredient_factory);
        }
        else if($type === "carbonara") {
            $pizza = new Carbonara($pizza_ingredient_factory);
        }

        return $pizza;
    }
}