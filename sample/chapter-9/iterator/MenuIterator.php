<?php

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
        return count($this->items) > $this->position;
    }
}
