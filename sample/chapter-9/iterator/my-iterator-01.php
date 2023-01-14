<?php
require("./../category/Coffee.php");
require("./../category/Pancake.php");
require("./../category/Tea.php");

interface IteratorInterface
{
    public function hasNext();
    public function next();
}

class MenuIterator implements IteratorInterface
{
    public $items;
    public $position = 0;

    function __construct($items)
    {
        $this->items = $items;
    }

    public function next()
    {
        $menuItem = $this->items[$this->position];
        $this->position++;
        return $menuItem;
    }

    public function hasNext(): bool
    {
        if (count($this->items) > $this->position) {
            return true;
        } else {
            return false;
        }
    }
}

$coffeeMenu = new MenuIterator(CoffeeMenu::getMenu());
$coffeeMenu = new MenuIterator(PancakeMenu::getMenu());

while ($coffeeMenu->hasNext()) {
    $menuItem = $coffeeMenu->next();
    echo $menuItem, PHP_EOL;
}
