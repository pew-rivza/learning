<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 13:58
 */

include_once __DIR__ . "/../Interfaces/Turkey.php";

class WildTurkey implements Turkey
{
    public function fly(): void
    {
        echo "Я подпрыгиваю и чуть-чуть так летаю.";
    }

    public function gobble(): void
    {
        echo "Я кулдыкаю.";
    }

    public function introduce_myself(): void
    {
        echo "Я индюшка, нагло притворяющаяся уткой ;).";
    }
}