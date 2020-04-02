<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 26.08.2019
 * Time: 20:28
 */

include_once __DIR__ . "/../Duck.php";
include_once __DIR__ . "/../Behaviors/BehaviorsRealisations/Fly/FlyNone.php";
include_once __DIR__ . "/../Behaviors/BehaviorsRealisations/Quack/QuackArtificially.php";

class RubberRealDuck extends RealDuck
{
    public function __construct()
    {
        $this->set_fly_way(new FlyNone());
        $this->set_quack_way(new QuackArtificially());
    }

    public function display()
    {
        echo "Я резиновая уточка для ванны.";
    }
}