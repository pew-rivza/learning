<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 20.02.2020
 * Time: 20:44
 */

include_once __DIR__ . "/../State.php";

class NoQuarterState implements State
{
    private $gumball_machine;

    public function __construct(GumballMachine $gumball_machine)
    {
        $this->gumball_machine = $gumball_machine;
    }

    public function insertQuarter(): void
    {
        echo "Автомат принял монету.<br>";
        $this->gumball_machine->
        setCurrentState($this->gumball_machine->getHasQuarterState());
    }

    public function ejectQuarter(): void
    {
        echo "Невозможно вернуть монету, так как ее нет.<br>";
    }

    public function turnCrank(): void
    {
        echo "Вы повернули рычаг, но не вставили монету. ";
    }

    public function dispense(): void
    {
        echo "Сначала оплатите.<br>";
    }
}