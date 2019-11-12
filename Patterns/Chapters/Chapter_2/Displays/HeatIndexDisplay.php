<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 16.09.2019
 * Time: 23:59
 */

include_once __DIR__ . '/../Interfaces/Observer.php';
include_once __DIR__ . '/../Interfaces/Displayable.php';

class HeatIndexDisplay implements \SplObserver, Displayable
{
    private $weatherData;

    public function __construct(\SplSubject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->attach($this);
    }

    public function display($data): void
    {
        echo "Тепловой индекс: " . $data["rh"] . "°C<br>";
    }

    public function update(SplSubject $subject)
    {
        $this->display($subject->get_state());
    }
}