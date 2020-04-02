<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 14:05
 */

include_once __DIR__ . "/Interfaces/RealDuck.php";

class TurkeyAdapter implements RealDuck
{
    private $turkey;
    
    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack(): void
    {
        $this->turkey->gobble();
    }

    public function fly(): void
    {
        $this->turkey->fly();
    }

    public function display(): void
    {
        $this->turkey->introduce_myself();
    }
}