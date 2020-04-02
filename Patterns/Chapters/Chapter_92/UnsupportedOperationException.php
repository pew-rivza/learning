<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 18.02.2020
 * Time: 22:38
 */

class UnsupportedOperationException extends Exception
{
    public function __construct() {
        parent::__construct("Операция не поддерживается на данном типе объекта");
    }
}