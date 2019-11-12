<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 26.07.2019
 * Time: 22:18
 */

abstract class Duck
{
    private $fly_way;
    private $quack_way;

    abstract public function display();
    
    public function swim() {
         echo "Я плаваю";
    }

    public function set_fly_way($fw) {
        $this->fly_way = $fw;
    }

    public function set_quack_way($qw) {
        $this->quack_way = $qw;
    }

    public function perform_fly() {
        echo $this->fly_way->fly();
    }

    public function perform_quack() {
        echo $this->quack_way->quack();
    }
}