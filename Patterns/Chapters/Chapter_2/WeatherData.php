<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 15.09.2019
 * Time: 19:22
 */

class WeatherData implements \SplSubject
{
    private $state;
    private $is_changed = false;
    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage;
    }

    public function get_state() {
        return $this->state;
    }

    public function set_measurements($temperature,$humidity,$pressure,$rh): void
    {
        $this->state = [
            "temperature" => $temperature,
            "humidity" => $humidity,
            "pressure" => $pressure,
            "rh" => $rh
        ];

        $this->is_changed = true;
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        if($this->is_changed) {
            foreach ($this->observers as $observer) {
                $observer->update($this);
            }

            $this->is_changed = false;
        }
    }
}