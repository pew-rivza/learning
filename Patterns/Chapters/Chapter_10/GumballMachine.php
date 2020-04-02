<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 20.02.2020
 * Time: 20:46
 */

include_once __DIR__ . "/States/NoQuarterState.php";
include_once __DIR__ . "/States/HasQuarterState.php";
include_once __DIR__ . "/States/SoldState.php";
include_once __DIR__ . "/States/SoldOutState.php";
include_once __DIR__ . "/States/WinnerState.php";

class GumballMachine
{
    private $no_quarter_state;
    private $has_quarter_state;
    private $sold_state;
    private $sold_out_state;
    private $winner_state;

    private $current_state;
    private $gumballs_count;
    private $gumballs_before_win;

    public function __construct(int $gumballs_count)
    {
        $this->no_quarter_state = new NoQuarterState($this);
        $this->has_quarter_state = new HasQuarterState($this);
        $this->sold_state = new SoldState($this);
        $this->sold_out_state = new SoldOutState($this);
        $this->winner_state = new WinnerState($this);

        $this->gumballs_count = $gumballs_count;
        $gumballs_before_win = 0;
        $this->current_state = $gumballs_count > 0 ?
            $this->no_quarter_state : $this->sold_out_state;
    }

    /**
     * @return NoQuarterState
     */
    public function getNoQuarterState(): NoQuarterState
    {
        return $this->no_quarter_state;
    }

    /**
     * @return HasQuarterState
     */
    public function getHasQuarterState(): HasQuarterState
    {
        return $this->has_quarter_state;
    }

    /**
     * @return SoldState
     */
    public function getSoldState(): SoldState
    {
        return $this->sold_state;
    }

    /**
     * @return SoldOutState
     */
    public function getSoldOutState(): SoldOutState
    {
        return $this->sold_out_state;
    }

    /**
     * @return mixed
     */
    public function getWinnerState()
    {
        return $this->winner_state;
    }

    /**
     * @param State $current_state
     */
    public function setCurrentState(State $current_state) : void
    {
        $this->current_state = $current_state;
    }

    /**
     * @return int
     */
    public function getGumballsCount(): int
    {
        return $this->gumballs_count;
    }

    /**
     * @return mixed
     */
    public function getGumballsBeforeWin()
    {
        return $this->gumballs_before_win;
    }

    public function nullGumballsBeforeWin()
    {
        $this->gumballs_before_win = 0;
    }

    public function insertQuarter(): void
    {
        $this->current_state->insertQuarter();
    }

    public function ejectQuarter(): void
    {
        $this->current_state->ejectQuarter();
    }

    public function turnCrank(): void
    {
        $this->current_state->turnCrank();
        $this->current_state->dispense();
    }

    public function dispense(): void
    {
        $this->current_state->dispense();
    }

    public function release_ball() : void {
        echo "Возьмите шарик и приятного аппетита!<br>";
        $this->gumballs_count--;
        $this->gumballs_before_win++;
    }

    public function fill_machine(int $gumballs_count) : void {
        echo "Поподняем автомат...<br>";
        $this->gumballs_count = $gumballs_count;
        $this->current_state = $this->no_quarter_state;
    }
}