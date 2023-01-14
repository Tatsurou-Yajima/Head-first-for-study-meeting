<?php
require("./../category/CoffeeMenu.php");
require("./../category/PancakeMenu.php");
require("./../category/TeaMenu.php");

class Waitress
{
    public $menuComponent = [];

    function __construct()
    {
        $this->add(CoffeeMenu::getMenu());
        $this->add(PancakeMenu::getMenu());
        $this->add(TeaMenu::getMenu());
    }

    function showMenu(): void
    {
        $iterator = new RecursiveArrayIterator($this->menuComponent);

        iterator_apply($iterator, 'Waitress::traverseStructure', [$iterator]);
    }

    private function add(array $menu): void
    {
        array_push($this->menuComponent, $menu);
    }

    static function traverseStructure($iterator)
    {
        while ($iterator->valid()) {
            if ($iterator->hasChildren()) {
                Waitress::traverseStructure($iterator->getChildren());
            } else {
                echo $iterator->current(), PHP_EOL;
            }
            $iterator->next();
        }
    }
}

$waitress = new Waitress();
$waitress->showMenu();
