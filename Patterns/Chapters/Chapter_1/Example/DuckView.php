<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 08.08.2019
 * Time: 22:43
 */

include_once __DIR__ . "/../Ducks/RedDuck.php";
include_once __DIR__ . "/../Ducks/WoodenDuck.php";
include_once __DIR__ . "/../Ducks/RubberDuck.php";

$red_duck = new RedDuck();
$wooden_duck = new WoodenDuck();
$rubber_duck = new RubberDuck();
?>

<div class="ducks-container">
    <div><?php $red_duck->get_name();?></div>
    <div><?php $wooden_duck->get_name();?></div>
    <div><?php $rubber_duck->get_name();?></div>

    <div><?php $red_duck->display();?></div>
    <div><?php $wooden_duck->display();?></div>
    <div><?php $rubber_duck->display();?></div>

    <div><?php $red_duck->swim();?></div>
    <div><?php $wooden_duck->swim();?></div>
    <div><?php $rubber_duck->swim();?></div>

    <div><?php $red_duck->perform_fly();?></div>
    <div><?php $wooden_duck->perform_fly();?></div>
    <div><?php $rubber_duck->perform_fly();?></div>

    <div><?php $red_duck->perform_quack();?></div>
    <div><?php $wooden_duck->perform_quack();?></div>
    <div><?php $rubber_duck->perform_quack();?></div>
</div>
