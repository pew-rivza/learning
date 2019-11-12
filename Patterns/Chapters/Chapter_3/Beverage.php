<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 28.10.2019
 * Time: 21:28
 */

abstract class Beverage
{
    private $description = "Неизвестный напиток";

    public function get_description(): string {
        return $this->description;
    }

    public function set_description($value): void {
        $this->description = $value;
    }

    public abstract function cost(): float;
}