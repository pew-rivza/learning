<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 20.02.2020
 * Time: 20:45
 */

include_once __DIR__ . "/../State.php";

class SoldState implements State
{
    private $gumball_machine;

    public function __construct(GumballMachine $gumball_machine)
    {
        $this->gumball_machine = $gumball_machine;
    }

    public function insertQuarter(): void
    {
        echo "Подождите, пока автомат выдаст шарик.<br>";
    }

    public function ejectQuarter(): void
    {
        echo "Невозможно вернуть монету, так как шарик уже выдается.<br>";
    }

    public function turnCrank(): void
    {
        echo "Вы уже повернули рычаг, дождитесь выдачи шарика.<br>";
    }

    public function dispense(): void
    {
        echo "Шарик выдан.<br>";
        $this->gumball_machine->release_ball();

        if($this->gumball_machine->getGumballsCount()>0) {
            $this->gumball_machine->
            setCurrentState($this->gumball_machine->getNoQuarterState());
        }
        else {
            $this->gumball_machine->nullGumballsBeforeWin();
            $this->gumball_machine->
            setCurrentState($this->gumball_machine->getSoldOutState());
        }
    }
}