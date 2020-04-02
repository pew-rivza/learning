<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 14:31
 */

include_once __DIR__ . "/Birds/WildDuck.php";
include_once __DIR__ . "/Birds/WildTurkey.php";
include_once __DIR__ . "/TurkeyAdapter.php";

class Pasture
{
    public static function main() {
        $duck = new WildDuck();
        $turkey = new WildTurkey();
        $ducky_turkey = new TurkeyAdapter($turkey);

        echo "<br><br>";
        echo "<strong>Настоящая утка:</strong><br>";
        $duck->display(); echo " ";
        $duck->quack(); echo " ";
        $duck->fly();
        echo "<br><br>";
        echo "<strong>Индюшка, притворяющаяся уткой:</strong><br>";
        $ducky_turkey->display(); echo " ";
        $ducky_turkey->quack(); echo " ";
        $ducky_turkey->fly();
    }
}