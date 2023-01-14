<?php
require("./../category/CoffeeMenu.php");
require("./../category/PancakeMenu.php");
require("./../category/TeaMenu.php");
require("./MenuIterator.php");

class Waitress
{
    function showMenu(): void
    {
        $coffeeMenu = new MenuIterator(CoffeeMenu::getMenu());
        $pancakeMenu = new MenuIterator(PancakeMenu::getMenu());
        // ↓これは動かない
        // $teaMenu = new MenuIterator(TeaMenu::getMenu());

        $this->output($coffeeMenu, $pancakeMenu);
        // $this->output($coffeeMenu, $pancakeMenu, $teaMenu);
    }

    private function output(MenuIterator ...$menuIteratorArray): void
    {
        foreach ($menuIteratorArray as $menuIterator) {
            while ($menuIterator->hasNext()) {
                $menuItem = $menuIterator->next();
                echo $menuItem, PHP_EOL;
            }
        }
    }
}

$waitress = new Waitress();
$waitress->showMenu();
