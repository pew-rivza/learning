<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 01.12.2019
 * Time: 15:00
 */

include_once __DIR__ . "/Ingredient.php";

class SauceCreamyGarlic implements Ingredient
{
    private $name = "Сливочно-чесночный";
    public function get_name() {
        return $this->name;
    }
}