<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 01.12.2019
 * Time: 15:04
 */

include_once __DIR__ . "/Ingredient.php";

class SauceTomato implements Ingredient
{
    private $name = "Томатный";
    public function get_name() {
        return $this->name;
    }
}