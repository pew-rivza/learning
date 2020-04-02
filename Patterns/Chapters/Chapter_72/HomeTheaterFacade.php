<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.02.2020
 * Time: 16:29
 */

include_once __DIR__ . "/ComplexTVSystem/TheaterLights.php";
include_once __DIR__ . "/ComplexTVSystem/Screen.php";
include_once __DIR__ . "/ComplexTVSystem/DVDPlayer.php";
include_once __DIR__ . "/ComplexTVSystem/Projector.php";
include_once __DIR__ . "/ComplexTVSystem/PopcornPopper.php";

class HomeTheaterFacade
{
    private $light;
    private $screen;
    private $dvd;
    private $projector;
    private $popcorner;

    public function __construct()
    {
        $this->light = new TheaterLights();
        $this->screen = new Screen();
        $this->dvd = new DVDPlayer();
        $this->projector = new Projector($this->dvd);
        $this->popcorner = new PopcornPopper();
    }

    public function watchMovie(): void
    {
        $operations = [
            $this->light->on(),
            $this->light->dim(10),
            $this->popcorner->on(),
            $this->popcorner->pop(),
            $this->screen->down(),
            $this->projector->on(),
            $this->projector->setWideScreenMode()
        ];

        foreach ($operations as $operation) {
            echo $operation; echo "<br>";
        }
    }

    public function endMovie(): void
    {
        $operations = [
            $this->projector->off(),
            $this->projector->setTVMode(),
            $this->screen->up(),
            $this->popcorner->off(),
            $this->light->off()
        ];

        foreach ($operations as $operation) {
            echo $operation; echo "<br>";
        }
    }
}