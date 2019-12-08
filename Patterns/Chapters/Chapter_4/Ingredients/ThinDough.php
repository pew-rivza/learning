<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 01.12.2019
 * Time: 14:55
 */

include_once __DIR__ . "/Ingredient.php";

class ThinDough implements Ingredient
{
    private $name = "Тонкое тесто";
    public function get_name() {
        return $this->name;
    }
}