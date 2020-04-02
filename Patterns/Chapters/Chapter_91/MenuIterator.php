<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 23:14
 */

interface MenuIterator
{
    public function hasNext() : bool;
    public function next() : MenuItem;
}