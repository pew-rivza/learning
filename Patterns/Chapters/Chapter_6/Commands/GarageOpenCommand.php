<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 07.01.2020
 * Time: 21:38
 */

include_once __DIR__ . "/../Command.php";

class GarageOpenCommand implements Command
{
    private $garage;

    public function __construct(Garage $garage)
    {
        $this->garage = $garage;
    }

    public function execute(): void
    {
        $this->garage->up(); echo " ";
        $this->garage->stop();
    }

    public function undo(): void
    {
        $this->garage->down(); echo " ";
        $this->garage->stop();
    }
}