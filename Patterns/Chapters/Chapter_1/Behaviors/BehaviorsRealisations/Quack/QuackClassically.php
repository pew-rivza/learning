<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 26.07.2019
 * Time: 22:35
 */

include_once __DIR__ . "/../../BehaviorsInterfaces/Quack.php";

class QuackClassically implements Quack
{
    public function quack()
    {
        return "Я крякаю по-настоящему.";
    }
}