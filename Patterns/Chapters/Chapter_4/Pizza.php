<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 23.11.2019
 * Time: 21:15
 */

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $basic_sauce;
    protected $filling_sauce;
    protected $cheese;
    protected $bacon;

    function get_name() {
        echo $this->name;
    }

    function set_name($name) {
        $this->name = $name;
    }

    abstract function prepare();

    public function bake() {
        echo "Запекаем...";
    }

    public function cut() {
        echo "Нарезаем на 8 кусочков...";
    }
    public function box() {
        echo "Упаковываем...";
    }
}