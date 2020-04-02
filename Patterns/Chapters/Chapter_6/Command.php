<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 07.01.2020
 * Time: 21:04
 */

interface Command
{
    public function execute() : void;
    public function undo() : void;
}