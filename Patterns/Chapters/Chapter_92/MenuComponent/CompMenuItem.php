<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 22:23
 */

include_once __DIR__ . "/CompMenuComponent.php";

class CompMenuItem extends CompMenuComponent
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

    public function get_name() : string {
        return $this->name;
    }

    public function get_description() : string {
        return $this->description;
    }

    public function get_price() : float {
        return $this->price;
    }

    public function is_vegetarian() : bool {
        return $this->vegetarian;
    }

    public function print_component(): void
    {
        echo ($this->is_vegetarian() ? "🍀 " : "") . $this->get_name() .
            " (" . $this->get_description() . ") " .
            $this->get_price() . "руб.<br>";
    }
}