<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 20.02.2020
 * Time: 21:48
 */

include_once __DIR__ . "/../State.php";

class WinnerState implements State
{
    private $gumball_machine;

    public function __construct(GumballMachine $gumball_machine)
    {
        $this->gumball_machine = $gumball_machine;
    }

    public function insertQuarter(): void
    {
        echo "Дождитесь выдачи шариков.<br>";
    }

    public function ejectQuarter(): void
    {
        echo "Невозможно вернуть монету, так как шарики уже выдаются.<br>";
    }

    public function turnCrank(): void
    {
        echo "Подождите, шарики уже выдаются.<br>";
    }

    public function dispense(): void
    {
        $this->gumball_machine->release_ball();
        if($this->gumball_machine->getGumballsCount() == 0) {
            $this->gumball_machine->
            setCurrentState($this->gumball_machine->getSoldOutState());
            $this->gumball_machine->nullGumballsBeforeWin();
        }
        else {
            echo "ПОЗДРАВЛЯЕМ, ВЫ ВЫИГРАЛИ ВТОРОЙ ШАРИК В ПОДАРОК!<br>";
            echo "Выдаю шарик.<br>";
            $this->gumball_machine->release_ball();
            $this->gumball_machine->nullGumballsBeforeWin();

            if($this->gumball_machine->getGumballsCount() > 0) {
                $this->gumball_machine->
                setCurrentState($this->gumball_machine->getNoQuarterState());
            }
            else {
                $this->gumball_machine->
                setCurrentState($this->gumball_machine->getSoldOutState());
            }
        }
    }
}