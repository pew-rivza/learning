<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 01.12.2019
 * Time: 15:05
 */

include_once __DIR__ . "/Ingredient.php";

class Bacon implements Ingredient
{
    private $name = "Бекон";
    public function get_name() {
        return $this->name;
    }
}