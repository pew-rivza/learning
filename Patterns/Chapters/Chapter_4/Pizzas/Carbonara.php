<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 01.12.2019
 * Time: 15:43
 */

include_once __DIR__ . "/../Pizza.php";

class Carbonara extends Pizza
{
    private $pizza_ingredient_factory;

    public function __construct(PizzaIngredientFactory $pizza_ingredient_factory)
    {
        $this->pizza_ingredient_factory = $pizza_ingredient_factory;
        $this->set_name("Пицца Карбонара");
    }

    public function prepare()
    {
        $this->get_name();
        echo " (" . $this->pizza_ingredient_factory->createDough()->get_name()
            . ", " . $this->pizza_ingredient_factory->createFillingSauce()->get_name()
            . ", " . $this->pizza_ingredient_factory->createCheese()->get_name()
            . ", " . $this->pizza_ingredient_factory->createBacon()->get_name() . ").";
    }

    public function cut()
    {
        echo "Нарезаем на 9 кусков...";
    }
}