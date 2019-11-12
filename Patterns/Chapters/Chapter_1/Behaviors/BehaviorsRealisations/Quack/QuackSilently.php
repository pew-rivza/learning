<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 26.07.2019
 * Time: 22:39
 */

class QuackSilently implements Quack
{
    public function quack()
    {
        return "Я не умею крякать.";
    }
}