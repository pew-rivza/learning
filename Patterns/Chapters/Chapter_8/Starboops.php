<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 18:20
 */

include_once __DIR__ . "/Beverages/Coffee.php";
include_once __DIR__ . "/Beverages/Tea.php";
include_once __DIR__ . "/Beverages/MulledWine.php";

class Starboops
{
    public static function main() : void {
        $coffee = new Coffee();
        $tea = new Tea();
        $mulled_wine = new MulledWine();

        ?>
        <strong>Приготовление кофе:</strong><br>
        <?php
        $coffee->prepare_recipe();
        ?>
        <br><br>
        <strong>Приготовление чая:</strong><br>
        <?php
        $tea->prepare_recipe();
        ?>
        <br><br>
        <strong>Приготовление глинтвейна:</strong><br>
        <?php
        $mulled_wine->prepare_recipe();
    }
}