<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 16.02.2020
 * Time: 15:07
 */

include_once __DIR__ . "/Waitress.php";
include_once __DIR__ . "/Menus/PancakeMenu.php";
include_once __DIR__ . "/Menus/DinnerMenu.php";

class Restaurant
{
    public static function main() {
        $waitress = new Waitress(new ArrayObject([new PancakeMenu(), new DinnerMenu()]));

        ?><div class="menu-tables"><?php
        $waitress->print_menu();
        ?></div><?php
    }

}