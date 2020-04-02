<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 18:15
 */

include_once __DIR__ . "/../CaffeineBeverage.php";

class Tea extends CaffeineBeverage
{

    public function brew(): void
    {
        echo "Завариваем чайный пакетик";
    }

    public function add_condiments(): void
    {
        echo "Добавляем сахар и лимон";
    }
}