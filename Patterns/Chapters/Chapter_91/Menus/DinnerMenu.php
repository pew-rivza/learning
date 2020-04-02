<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 23:03
 */

include_once __DIR__ . "/../MenuItem.php";
include_once __DIR__ . "/../Iterators/DinnerMenuIterator.php";
include_once __DIR__ . "/../Menu.php";

class DinnerMenu implements Menu
{
    private $menu_items;

    public function __construct()
    {
        $this->menu_items = [];
        $this->add_item("Солянка",
            "Нажористый суп с четырьмя видами мяса", 180, false);

        $this->add_item("Греческий салат",
            "Классика прямиком из Греции", 410, true);

        $this->add_item("Свинная котлета с пюре",
            "Огромная котлета с сыром внутри, завернутая бекон", 800, false);
    }

    public function add_item(string $name, string $description, float $price, bool $vegetarian) : void {
        $this->menu_items[] =
            new MenuItem($name, $description, $price, $vegetarian);
    }

    public function create_iterator() : MenuIterator {
        return new DinnerMenuIterator($this->menu_items);
    }
}