<?php

class Waitress
{
    function showMenu(): void
    {
        echo 'コーヒー', PHP_EOL;
        foreach (CoffeeMenu::getMenu() as $menu) {
            $this->echoMenu($menu);
        }

        echo 'パンケーキ', PHP_EOL;
        foreach (PancakeMenu::getMenu() as $menu) {
            $this->echoMenu($menu);
        }
    }

    private function echoMenu(string $menu): void
    {
        echo '  ', $menu, PHP_EOL;
    }
}

class CoffeeMenu
{
    static function getMenu(): array
    {
        return [
            'エスプレッソ',
            'カフェオレ',
        ];
    }
}

class PancakeMenu
{
    static function getMenu(): array
    {
        return [
            'ホイップパンケーキ',
            'フルーツパンケーキ',
        ];
    }
}

$waitress = new Waitress();
$waitress->showMenu();
