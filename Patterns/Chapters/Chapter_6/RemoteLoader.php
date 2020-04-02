<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 12.01.2020
 * Time: 22:42
 */

include_once __DIR__ . "/Devices/Garage.php";
include_once __DIR__ . "/Devices/GarageLight.php";
include_once __DIR__ . "/Devices/KitchenLight.php";
include_once __DIR__ . "/Devices/TV.php";

include_once __DIR__ . "/Commands/LightOnCommand.php";
include_once __DIR__ . "/Commands/LightOffCommand.php";
include_once __DIR__ . "/Commands/GarageOpenCommand.php";
include_once __DIR__ . "/Commands/GarageCloseCommand.php";
include_once __DIR__ . "/Commands/TVOnCommand.php";
include_once __DIR__ . "/Commands/TVOffCommand.php";

include_once __DIR__ . "/RemoteControl.php";

class RemoteLoader
{
    public static function main(): void {
        $garage_light = new GarageLight();
        $kitchen_light = new KitchenLight();
        $tv = new TV();
        $garage = new Garage();

        $garage_light_on_command = new LightOnCommand($garage_light);
        $garage_light_off_command = new LightOffCommand($garage_light);

        $kitchen_light_on_command = new LightOnCommand($kitchen_light);
        $kitchen_light_off_command = new LightOffCommand($kitchen_light);

        $garage_open_command = new GarageOpenCommand($garage);
        $garage_close_command = new GarageCloseCommand($garage);

        $tv_on_command = new TVOnCommand($tv);
        $tv_off_command = new TVOffCommand($tv);

        $remote_control = new RemoteControl();
        $remote_control->set_command(0, $garage_light_on_command, $garage_light_off_command);
        $remote_control->set_command(1, $kitchen_light_on_command, $kitchen_light_off_command);
        $remote_control->set_command(2, $garage_open_command, $garage_close_command);
        $remote_control->set_command(3, $tv_on_command, $tv_off_command);

        $remote_control->on_button_was_pushed(0); echo "<br>";
        $remote_control->on_button_was_pushed(3); echo "<br>";
        $remote_control->undo_button_was_pushed();
    }
}