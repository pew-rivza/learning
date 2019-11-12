<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 26.07.2019
 * Time: 22:32
 */

class FlyNone implements Fly
{
    public function fly()
    {
        return "Я не умею летать.";
    }
}