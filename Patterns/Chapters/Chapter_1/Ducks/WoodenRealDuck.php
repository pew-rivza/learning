<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 26.08.2019
 * Time: 20:18
 */

include_once __DIR__ . "/../Duck.php";
include_once __DIR__ . "/../Behaviors/BehaviorsRealisations/Fly/FlyNone.php";
include_once __DIR__ . "/../Behaviors/BehaviorsRealisations/Quack/QuackSilently.php";

class WoodenRealDuck extends RealDuck
{
    public function __construct()
    {
        $this->set_fly_way(new FlyNone());
        $this->set_quack_way(new QuackSilently());
    }

    public function display()
    {
        echo "Я деревянная декоративная утка.";
    }
}