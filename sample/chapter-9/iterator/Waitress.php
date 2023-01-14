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

        $this->output($coffeeMenu);
        $this->output($pancakeMenu);
    }

    private function output(MenuIterator $menuIterator): void
    {
        while ($menuIterator->hasNext()) {
            $menuItem = $menuIterator->next();
            echo $menuItem, PHP_EOL;
        }
    }
}

$waitress = new Waitress();
$waitress->showMenu();
