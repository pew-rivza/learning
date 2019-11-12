<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 26.07.2019
 * Time: 22:29
 */

include_once __DIR__ . "/../../BehaviorsInterfaces/Fly.php";

class FlyWithWings implements Fly
{
    public function fly()
    {
        return "Я летаю своими крылышками.";
    }
}