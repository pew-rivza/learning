<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 07.01.2020
 * Time: 21:49
 */

include_once __DIR__ . "/Commands/NoCommand.php";

class RemoteControl
{
    private $on_comands;
    private $off_comands;
    private $undo_command;

    public function __construct()
    {
        $no_command = new NoCommand();
        for($i=0;$i<4;$i++) {
            $this->on_comands[$i] = $no_command;
            $this->off_comands[$i] = $no_command;
        }
        $this->undo_command = $no_command;
    }

    public function set_command(int $slot, Command $on_command, Command $off_command): void {
        $this->on_comands[$slot] = $on_command;
        $this->off_comands[$slot] = $off_command;
    }

    public function on_button_was_pushed(int $slot) {
        $this->on_comands[$slot]->execute();
        $this->undo_command =  $this->on_comands[$slot];
    }

    public function off_button_was_pushed(int $slot) {
        $this->off_comands[$slot]->execute();
        $this->undo_command = $this->off_comands[$slot];
    }

    public function undo_button_was_pushed() {
        $this->undo_command->undo();
    }
}