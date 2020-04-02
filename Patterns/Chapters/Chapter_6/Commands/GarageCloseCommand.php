<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 12.01.2020
 * Time: 22:31
 */

include_once __DIR__ . "/../Command.php";

class GarageCloseCommand implements Command
{
    private $garage;

    public function __construct(Garage $garage)
    {
        $this->garage = $garage;
    }

    public function execute(): void
    {
        $this->garage->down(); echo " ";
        $this->garage->stop();
    }

    public function undo(): void
    {
        $this->garage->up(); echo " ";
        $this->garage->stop();
    }
}