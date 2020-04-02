<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 20.02.2020
 * Time: 20:43
 */

include_once __DIR__ . "/../State.php";

class HasQuarterState implements State
{
    private $gumball_machine;

    public function __construct(GumballMachine $gumball_machine)
    {
        $this->gumball_machine = $gumball_machine;
    }

    public function insertQuarter(): void
    {
        echo "Монета уже вставлена, поверните рычаг.<br>";
    }

    public function ejectQuarter(): void
    {
        echo "Автомат возвращает монету.<br>";
        $this->gumball_machine->
        setCurrentState($this->gumball_machine->getNoQuarterState());
    }

    public function turnCrank(): void
    {
        echo "Выдаю шарик... ";

        if($this->gumball_machine->getGumballsBeforeWin() == 1) {
            $this->gumball_machine->
            setCurrentState($this->gumball_machine->getWinnerState());
        }
        else {
            $this->gumball_machine->
            setCurrentState($this->gumball_machine->getSoldState());
        }
    }

    public function dispense(): void
    {
        echo "Невозможно выдать шарик, сначала поверните рычаг.<br>";
    }
}