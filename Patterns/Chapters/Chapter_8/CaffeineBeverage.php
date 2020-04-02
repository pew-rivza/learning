<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 18:04
 */

abstract class CaffeineBeverage
{
    function prepare_recipe() : void {
        $this->boil_water(); echo "<br>";
        $this->brew(); echo "<br>";
        $this->pour_in_cup(); echo "<br>";
        $this->add_condiments(); echo "<br>";
        echo "Напиток готов!";
    }

    public function boil_water() : void {
        echo "Наливаем воду...";
    }

    abstract public function brew() : void;

    public function pour_in_cup() : void {
        echo "Наливаем напиток в чашку";
    }

    abstract public function add_condiments() : void;
}