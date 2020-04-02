<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 16.02.2020
 * Time: 15:07
 */

include_once __DIR__ . "/CompWaitress.php";
include_once __DIR__ . "/MenuComponent/CompMenuPart.php";
include_once __DIR__ . "/MenuComponent/CompMenuItem.php";

class CompRestaurant
{
    public static function main() {
        $pancake_menu = new CompMenuPart("МЕНЮ С ЗАВТРАКАМИ",
            "То, чем вы можете позавтрать");
        $dinner_menu = new CompMenuPart("МЕНЮ С ОБЕДАМИ",
            "То, чем вы сможете пообедать");
        $children_menu = new CompMenuPart("ДЕТСКОЕ МЕНЮ",
            "То, чем вы сможете угостить детей");

        $all_menus = new CompMenuPart("ВСЕ МЕНЮ",
            "Все блюда");

        $pancake_menu->add(new CompMenuItem("Чизкейк Нью-Йорк",
            "Классический амариканский чизкейк",
            200, true));
        $pancake_menu->add(new CompMenuItem("Блинчики со сгущенкой",
            "Три ароматных блинчика с белой сгущенкой",
            210, true));
        $pancake_menu->add(new CompMenuItem("Сэндвичи по-норвежски",
            "Два сэндвича со свежим лососем и сливочным сыром",
            140, false));

        $children_menu->add(new CompMenuItem("Морской завтрак",
            "Пюре из брокколи с рыбными котлетками",
            120, false));
        $children_menu->add(new CompMenuItem("Золушкин бал",
            "Тыквенный суп с гренками и соусом песто",
            180, true));
        $children_menu->add(new CompMenuItem("Сырники",
            "Четыре ароматных сырника с вареньем на выбор",
            90, true));

        $dinner_menu->add(new CompMenuItem("Солянка",
            "Нажористый суп с четырьмя видами мяса",
            180, false));
        $dinner_menu->add(new CompMenuItem("Овощи на гриле",
            "Овощи, смазанные лимонным соком и запеченые на гриле",
            90, true));
        $dinner_menu->add(new CompMenuItem("Греческий салат",
            "Классика прямиком из Греции",
            410, true));
        $dinner_menu->add(new CompMenuItem("Свинная котлета с пюре",
            "Огромная котлета с сыром внутри, завернутая бекон",
            800, false));
        $dinner_menu->add($children_menu);

        $all_menus->add($pancake_menu);
        $all_menus->add($dinner_menu);

        $waitress = new CompWaitress($all_menus);


        try {
            $waitress->print_all_menu();
        }
        catch (UnsupportedOperationException $exception) {
            echo $exception->getMessage();
        }
    }

}