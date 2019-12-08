<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 14.11.2019
 * Time: 22:17
 */

include_once __DIR__ . "/Ducks/RedDuck.php";
include_once __DIR__ . "/Ducks/RubberDuck.php";
include_once __DIR__ . "/Ducks/WoodenDuck.php";

class DuckGame
{
    public static function main() {
        ?>
        <ul>
            <li>
                <?php
                $red_duck = new RedDuck();
                $red_duck->display(); echo " ";
                $red_duck->perform_quack(); echo " ";
                $red_duck->perform_fly();
                ?>
            </li>

            <li>
                <?php
                $rubber_duck = new RubberDuck();
                $rubber_duck->display(); echo " ";
                $rubber_duck->perform_quack(); echo " ";
                $rubber_duck->perform_fly();
                ?>
            </li>

            <li>
                <?php
                $wooden_duck = new WoodenDuck();
                $wooden_duck->display(); echo " ";
                $wooden_duck->perform_quack(); echo " ";
                $wooden_duck->perform_fly();
                ?>
            </li>
        </ul>
        <?php
    }
}