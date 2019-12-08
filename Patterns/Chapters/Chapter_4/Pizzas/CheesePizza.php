<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 01.12.2019
 * Time: 15:33
 */

include_once __DIR__ . "/../Pizza.php";

class CheesePizza extends Pizza
{
    private $pizza_ingredient_factory;

    public function __construct(PizzaIngredientFactory $pizza_ingredient_factory)
    {
        $this->pizza_ingredient_factory = $pizza_ingredient_factory;
        $this->set_name("Сырная пицца");
    }

    public function prepare()
    {
        $this->get_name();
        echo " (" . $this->pizza_ingredient_factory->createDough()->get_name()
            . ", " . $this->pizza_ingredient_factory->createBasicSauce()->get_name()
            . ", " . $this->pizza_ingredient_factory->createCheese()->get_name() . ").";
    }
}