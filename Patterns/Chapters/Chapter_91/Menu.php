<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 16.02.2020
 * Time: 15:28
 */

interface Menu
{
    public function add_item(string $name, string $description, float $price, bool $vegetarian) : void;
    public function create_iterator() : MenuIterator;
}