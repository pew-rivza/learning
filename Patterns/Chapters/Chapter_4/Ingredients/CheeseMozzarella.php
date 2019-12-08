<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 01.12.2019
 * Time: 15:02
 */

include_once __DIR__ . "/Ingredient.php";

class CheeseMozzarella implements Ingredient
{
    private $name = "Моцарелла";
    public function get_name() {
        return $this->name;
    }
}