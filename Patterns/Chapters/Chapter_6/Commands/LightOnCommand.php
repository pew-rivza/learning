<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 07.01.2020
 * Time: 21:06
 */

include_once __DIR__ . "/../Command.php";

class LightOnCommand implements Command
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->on();
    }

    public function undo(): void
    {
        $this->light->off();
    }
}