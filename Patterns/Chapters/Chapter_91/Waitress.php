<?php
/**
 * Created by PhpStorm.
 * User: Katrin
 * Date: 16.02.2020
 * Time: 14:53
 */

class Waitress
{
    private $menus;

    public function __construct(ArrayObject $menus)
    {
        $this->menus = $menus;

    }

    private function iterate_menu(MenuIterator $iterator) {
        while ($iterator->hasNext()) {
            $this->print_menu_item($iterator->next());
        }
    }

    private function print_menu_item(MenuItem $menu_item) {
        ?>
        <tr>
            <td style="border: 1px solid #666"><?= $menu_item->is_vegetarian() ? "🍀" : " "; ?></td>
            <td style="border: 1px solid #666"><?= $menu_item->get_name(); ?></td>
            <td style="border: 1px solid #666"><?= $menu_item->get_price(); ?></td>
        </tr>
        <tr>
            <td style="border: 1px solid #666" colspan="3"><?= $menu_item->get_description()?></td>
        </tr>
        <?php
    }

    public function print_menu() {
        $menus_iterator = $this->menus->getIterator();

        while ($menus_iterator->valid()) {
            ?>
            <div>
                <table>
                    <?php $this->iterate_menu($menus_iterator->current()->create_iterator()); ?>
                </table>
            </div>
            <?php
            $menus_iterator->next();
        }
    }
}