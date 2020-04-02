<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 12.01.2020
 * Time: 22:29
 */

include_once __DIR__ . "/../Command.php";

class LightOffCommand implements Command
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->off();
    }

    public function undo(): void
    {
        $this->light->on();
    }
}