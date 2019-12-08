<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 01.12.2019
 * Time: 14:58
 */

include_once __DIR__ . "/Ingredient.php";

class SauceMarinara implements Ingredient
{
    private $name = "Маринара";
    public function get_name() {
        return $this->name;
    }
}