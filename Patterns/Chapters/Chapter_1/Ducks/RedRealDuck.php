<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 26.07.2019
 * Time: 22:41
 */

include_once __DIR__ . "/../Duck.php";
include_once __DIR__ . "/../Behaviors/BehaviorsRealisations/Fly/FlyWithWings.php";
include_once __DIR__ . "/../Behaviors/BehaviorsRealisations/Quack/QuackClassically.php";

class RedRealDuck extends RealDuck
{
    public function __construct()
    {
        $this->set_fly_way(new FlyWithWings());
        $this->set_quack_way(new QuackClassically());
    }

    public function display()
    {
        echo "Я живая утка.";
    }
}