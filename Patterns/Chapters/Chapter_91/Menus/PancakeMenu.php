<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 22:34
 */

include_once __DIR__ . "/../MenuItem.php";
include_once __DIR__ . "/../Iterators/PancakeMenuIterator.php";
include_once __DIR__ . "/../Menu.php";

define("MAX_ITEMS", 3);

class PancakeMenu implements Menu
{
    private $menu_items;
    private $number_of_items = 0;

    public function __construct()
    {
        $this->menu_items = new SplFixedArray(MAX_ITEMS);
        $this->add_item("Чизкейк Нью-Йорк",
            "Классический амариканский чизкейк", 200, true);

        $this->add_item("Блинчики со сгущенкой",
            "Три ароматных блинчика с белой сгущенкой", 210, true);

        $this->add_item("Сэндвичи по-норвежски",
            "Два сэндвича со свежим лососем и сливочным сыром", 140, false);
    }

    public function add_item(string $name, string $description, float $price, bool $vegetarian) : void {
        $this->menu_items[$this->number_of_items] =
            new MenuItem($name, $description, $price, $vegetarian);
        $this->number_of_items++;
    }

    public function create_iterator() : MenuIterator {
        return new PancakeMenuIterator($this->menu_items);
    }
}