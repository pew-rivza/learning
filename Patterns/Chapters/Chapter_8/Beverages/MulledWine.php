<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 19:22
 */

class MulledWine extends CaffeineBeverage
{

    public function brew(): void
    {
        echo "Варим с большой кастрюле с фруктами...";
    }

    public function add_condiments(): void
    {
        echo "Добавляем колечко апельсина и виноградинку...";
    }
}