<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 03.01.2020
 * Time: 20:47
 */

class ChocolateBoiler
{
    private $empty;
    private $boiled;
    private static $uniqueInstance;

    private function __construct()
    {
        $this->empty = true;
        $this->boiled = false;
    }

    public static function getInstance() : ChocolateBoiler {
        if(!isset(static::$uniqueInstance)) {
            static::$uniqueInstance = new ChocolateBoiler();
        }
        return static::$uniqueInstance;
    }

    public function isEmpty() : bool {
        return $this->empty;
    }

    public function isBoiled() : bool {
        return $this->boiled;
    }

    public function fill() : void {
        if($this->isEmpty()) {
            $this->empty = false;
            $this->boiled = false;
            echo "Наполняем молоком и шоколадом...";
        }
        else echo "Невозможно наполнить! Тара уже заполнена.";
    }

    public function drain() : void {
        if(!$this->isEmpty() && $this->isBoiled()) {
            $this->empty = true;
            echo "Сливаем горячий шоколад...";
        }
        else echo "Не удалось слить шоколад! Тара пуста или не нагрета.";
    }

    public function boil() : void {
        if(!$this->isEmpty() && !$this->isBoiled()) {
            $this->boiled = true;
            echo "Нагреваем смесь...";
        }
        else echo "Не удается нагреть смесь! Тара пуста или уже нагрета.";
    }
}