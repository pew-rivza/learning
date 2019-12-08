<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 01.12.2019
 * Time: 14:58
 */

include_once __DIR__ . "/Ingredient.php";

class ThickDough implements Ingredient
{
    private $name = "Толстое тесто";
    public function get_name() {
        return $this->name;
    }
}