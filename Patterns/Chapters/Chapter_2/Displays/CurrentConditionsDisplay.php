<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.09.2019
 * Time: 20:02
 */

include_once __DIR__ . '/../Interfaces/Observer.php';
include_once __DIR__ . '/../Interfaces/Displayable.php';

class CurrentConditionsDisplay implements \SplObserver, Displayable
{
    private $weatherData;

    public function __construct(\SplSubject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->attach($this);
    }

    public function display($data): void
    {
        ?>
            Температура: <?= $data["temperature"] ?>°C<br>
            Влажность: <?= $data["humidity"] ?>%<br>
            Давление: <?= $data["pressure"] ?><br>
        <?php
    }

    public function update(SplSubject $subject): void
    {
        $this->display($subject->get_state());
    }
}