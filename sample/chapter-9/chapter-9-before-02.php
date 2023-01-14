<?php
require("./Coffee.php");
require("./Pancake.php");
require("./Tea.php");

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
        foreach ($menuArray as $category => $menu) {
            echo $category, PHP_EOL;
            $this->echoMenu($menu);
        }
    }

    private function outputTea(array $menuArray): void
    {
        echo 'ティー', PHP_EOL;
        $this->echoMenu($menuArray);
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
