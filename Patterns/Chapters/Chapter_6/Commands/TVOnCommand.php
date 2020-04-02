<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 12.01.2020
 * Time: 22:34
 */

include_once __DIR__ . "/../Command.php";

class TVOnCommand implements Command
{
    private $tv;

    public function __construct(TV $tv)
    {
        $this->tv = $tv;
    }

    public function execute(): void {
        $this->tv->on(); echo " ";
        $this->tv->set_channel(5); echo "; ";
        $this->tv->set_volume(60); echo ".";
    }

    public function undo(): void
    {
        $this->tv->off();
    }
}