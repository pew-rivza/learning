<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 22:23
 */

class MenuItem
{
    private $name;
    private $description;
    private $price;
    private $vegetarian;

    public function __construct(string $name, string $description, float $price, bool $vegetarian)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->vegetarian = $vegetarian;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_description() {
        return $this->description;
    }

    public function get_price() {
        return $this->price;
    }

    public function is_vegetarian() {
        return $this->vegetarian;
    }
}