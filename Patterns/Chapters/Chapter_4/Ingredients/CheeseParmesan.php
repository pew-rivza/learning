<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 01.12.2019
 * Time: 15:04
 */

include_once __DIR__ . "/Ingredient.php";

class CheeseParmesan implements Ingredient
{
    private $name = "Пармезан";
    public function get_name() {
        return $this->name;
    }
}