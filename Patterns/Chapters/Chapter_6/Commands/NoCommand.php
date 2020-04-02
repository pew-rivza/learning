<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 12.01.2020
 * Time: 22:09
 */

class NoCommand implements Command
{
    public function execute(): void {}

    public function undo(): void {}
}