<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 01.12.2019
 * Time: 14:51
 */

include_once __DIR__ . "/../IngredientFactories/PizzaIngredientFactory.php";
include_once __DIR__ . "/../Ingredients/ThinDough.php";
include_once __DIR__ . "/../Ingredients/SauceMarinara.php";
include_once __DIR__ . "/../Ingredients/SauceCreamyGarlic.php";
include_once __DIR__ . "/../Ingredients/CheeseParmesan.php";
include_once __DIR__ . "/../Ingredients/Bacon.php";

class NYStylePizzaIngredientFactory implements PizzaIngredientFactory
{

    public function createDough(): Ingredient
    {
        return new ThinDough();
    }

    public function createBasicSauce(): Ingredient
    {
        return new SauceMarinara();
    }

    public function createFillingSauce(): Ingredient {
        return new SauceCreamyGarlic();
    }

    public function createCheese(): Ingredient
    {
        return new CheeseParmesan();
    }

    public function createBacon(): Ingredient
    {
        return new Bacon();
    }
}