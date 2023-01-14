<?php
require("./../category/CoffeeMenu.php");
require("./../category/PancakeMenu.php");

class Waitress
{
    function showMenu(): void
    {
        $this->output(CoffeeMenu::getMenu());
        $this->output(PancakeMenu::getMenu());
    }

    private function output(array $menuArray): void
    {
        foreach ($menuArray as $menu) {
            echo $menu, PHP_EOL;
        }
    }
}

$waitress = new Waitress();
$waitress->showMenu();
