<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 01.12.2019
 * Time: 14:48
 */

interface PizzaIngredientFactory
{
    public function createDough(): Ingredient;
    public function createBasicSauce(): Ingredient;
    public function createFillingSauce(): Ingredient;
    public function createCheese(): Ingredient;
    public function createBacon(): Ingredient;
}