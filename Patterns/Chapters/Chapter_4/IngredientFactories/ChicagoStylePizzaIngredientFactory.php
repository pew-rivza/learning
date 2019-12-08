<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 01.12.2019
 * Time: 15:13
 */

include_once __DIR__ . "/../Ingredients/ThickDough.php";
include_once __DIR__ . "/../Ingredients/SauceTomato.php";
include_once __DIR__ . "/../Ingredients/SauceCreamyGarlic.php";
include_once __DIR__ . "/../Ingredients/CheeseMozzarella.php";
include_once __DIR__ . "/../Ingredients/Bacon.php";

class ChicagoStylePizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Ingredient
    {
        return new ThickDough();
    }

    public function createBasicSauce(): Ingredient
    {
        return new SauceTomato();
    }

    public function createFillingSauce(): Ingredient {
        return new SauceCreamyGarlic();
    }

    public function createCheese(): Ingredient
    {
        return new CheeseMozzarella();
    }

    public function createBacon(): Ingredient
    {
        return new Bacon();
    }
}