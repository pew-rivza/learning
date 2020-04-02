<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 16.02.2020
 * Time: 14:26
 */

include_once __DIR__ . "/../MenuIterator.php";

class PancakeMenuIterator implements MenuIterator
{
    private $items;

    public function __construct(SplFixedArray $items)
    {
        $this->items = $items;
    }

    public function hasNext(): bool
    {
        return $this->items->key() < $this->items->count();
    }

    public function next(): MenuItem
    {
        $menu_item = $this->items->current();
        $this->items->next();
        return $menu_item;
    }
}