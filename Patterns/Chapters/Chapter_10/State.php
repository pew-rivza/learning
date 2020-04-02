<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 20.02.2020
 * Time: 20:20
 */

interface State
{
    public function insertQuarter() : void;
    public function ejectQuarter() : void;
    public function turnCrank() : void;
    public function dispense() : void;
}