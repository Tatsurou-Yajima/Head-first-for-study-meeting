<?php
require("./Coffee.php");
require("./Pancake.php");

class Waitress
{
    function showMenu(): void
    {
        $this->output(CoffeeMenu::getMenu());
        $this->output(PancakeMenu::getMenu());
    }

    private function output(array $menuArray): void
    {
        foreach ($menuArray as $category => $menuArray) {
            echo $category, PHP_EOL;
            $this->echoMenu($menuArray);
        }
    }

    private function echoMenu(array $menuArray): void
    {
        foreach ($menuArray as $menu) {
            echo '  ', $menu, PHP_EOL;
        }
    }
}

$waitress = new Waitress();
$waitress->showMenu();
