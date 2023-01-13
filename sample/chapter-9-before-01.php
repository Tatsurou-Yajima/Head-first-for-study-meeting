<?php

class Waitress
{
    public function showMenu()
    {
        foreach (CoffeeMenu::getMenu() as $menu) {
            echo $menu, PHP_EOL;
        }

        foreach (PancakeMenu::getMenu() as $menu) {
            echo $menu, PHP_EOL;
        }
    }
}

class CoffeeMenu
{
    static function getMenu()
    {
        return [
            'エスプレッソ',
            'カフェオレ',
        ];
    }
}

class PancakeMenu
{
    static function getMenu()
    {
        return [
            'ホイップパンケーキ',
            'フルーツパンケーキ',
        ];
    }
}

$waitress = new Waitress();
$waitress->showMenu();
