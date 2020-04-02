<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 16.02.2020
 * Time: 14:15
 */

include_once __DIR__ . "/../MenuIterator.php";

class DinnerMenuIterator implements MenuIterator
{
    private $items;
    private $position = 0;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function hasNext(): bool
    {
        return $this->position < count($this->items);
    }

    public function next(): MenuItem
    {
        return $this->items[$this->position++];
    }
}