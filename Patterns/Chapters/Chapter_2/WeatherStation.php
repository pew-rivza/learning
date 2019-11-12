<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.09.2019
 * Time: 20:33
 */

include_once __DIR__ . '/WeatherData.php';
include_once __DIR__ . '/Displays/CurrentConditionsDisplay.php';
include_once __DIR__ . '/Displays/HeatIndexDisplay.php';

class WeatherStation
{
    public static function main() {
        $subject = new WeatherData();
        $current_conditions_observer = new CurrentConditionsDisplay($subject);
        $heat_observer = new HeatIndexDisplay($subject);
        ?>
        <div class="weather-indication">
            <div>
                Показания 1:<br>
                <?php
                $subject->set_measurements(24,81,763,20);
                $subject->notify();
                ?>
            </div>
            <div>
                Показания 2:<br>
                <?php
                $subject->set_measurements(20,86,761,18);
                $subject->notify();
                ?>
            </div>
        </div>
        <?php

    }
}