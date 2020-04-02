<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 18.02.2020
 * Time: 22:18
 */

abstract class CompMenuComponent
{
    /**
     * @return string
     * @throws UnsupportedOperationException
     */

    public function get_name() : string {
        throw new UnsupportedOperationException();
    }

    /**
     * @return string
     * @throws UnsupportedOperationException
     */

    public function get_description() : string {
        throw new UnsupportedOperationException();
    }

    /**
     * @return float
     * @throws UnsupportedOperationException
     */

    public function get_price() : float {
        throw new UnsupportedOperationException();
    }

    /**
     * @return bool
     * @throws UnsupportedOperationException
     */

    public function is_vegetarian() : bool {
        throw new UnsupportedOperationException();
    }

    /**
     * @param CompMenuComponent $component
     * @throws UnsupportedOperationException
     */

    public function add(CompMenuComponent $component) : void {
        throw new UnsupportedOperationException();
    }

    /**
     * @throws UnsupportedOperationException
     */

    public function print_component() : void {
        throw new UnsupportedOperationException();
    }
}