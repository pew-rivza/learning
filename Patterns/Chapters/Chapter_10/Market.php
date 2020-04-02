<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 20.02.2020
 * Time: 21:40
 */

include_once __DIR__ . "/GumballMachine.php";

class Market
{
    public static function main() : void {
        $gumball_machine = new GumballMachine(3);

        $gumball_machine->insertQuarter();
        $gumball_machine->turnCrank();
        echo "<br>";
        $gumball_machine->insertQuarter();
        $gumball_machine->turnCrank();
        echo "<br>";
        $gumball_machine->insertQuarter();
        $gumball_machine->fill_machine(5);
        echo "<br>";
        $gumball_machine->insertQuarter();
        $gumball_machine->turnCrank();
    }
}