<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 16.02.2020
 * Time: 14:53
 */

class CompWaitress
{
    private $all_menus;

    public function __construct(CompMenuComponent $menus)
    {
        $this->all_menus = $menus;

    }

    /**
     * @throws UnsupportedOperationException
     */
    
    public function print_all_menu() : void {
        $this->all_menus->print_component();
    }
}