<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 18.02.2020
 * Time: 23:18
 */

include_once __DIR__ . "/CompMenuComponent.php";

class CompMenuPart extends CompMenuComponent
{
    private $menu_part_components;
    private $name;
    private $description;

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
        $this->menu_part_components = [];
    }

    public function add(CompMenuComponent $component): void
    {
        array_push($this->menu_part_components, $component);
    }

    public function get_name(): string
    {
        return $this->name;
    }

    public function get_description(): string
    {
        return $this->description;
    }

    public function print_component(): void
    {
        echo "<br><br><strong>$this->name</strong><br>$this->description<br><br>";

        foreach ($this->menu_part_components as $menu_part_component) {
            $menu_part_component->print_component();
        }
    }
}