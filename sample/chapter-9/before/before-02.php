<?php
require("./../category/CoffeeMenu.php");
require("./../category/PancakeMenu.php");
require("./../category/TeaMenu.php");

class Waitress
{
    function showMenu(): void
    {
        $this->output(CoffeeMenu::getMenu());
        $this->output(PancakeMenu::getMenu());

        // ↓ TeaMenu クラス固有の処理を書かないといけない
        $this->outputTea(TeaMenu::getMenu());
    }

    private function output(array $menuArray): void
    {
        foreach ($menuArray as $menu) {
            echo $menu, PHP_EOL;
        }
    }

    private function outputTea(array $menuArray): void
    {
        foreach ($menuArray as $valueArray) {
            $this->output($valueArray);
        };
    }
}

$waitress = new Waitress();
$waitress->showMenu();
