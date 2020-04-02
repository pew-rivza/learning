<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 18:09
 */

include_once __DIR__ . "/../CaffeineBeverage.php";

class Coffee extends CaffeineBeverage
{
    public function brew(): void
    {
        echo "Завариваем в кофемашине...";
    }

    public function add_condiments(): void
    {
        echo "Добавляем сливки...";
    }
}