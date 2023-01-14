<?php

interface IteratorInterface
{
    public function hasNext(): bool;
    public function next(): MenuItem;
}

class MenuIterator implements IteratorInterface
{
    public $items;
    private $position;

    function __construct($items)
    {
        $this->items = $items;
    }

    public function next(): MenuItem
    {
        $menuItem = $this->items[$this->position];
        $this->position = $this->position++;
        return $menuItem;
    }

    public function hasNext(): bool
    {
        return !($this->position >= count($this->items) || $this->items[$this->position] == null);
        // if ($this->position >= count($this->items) || $this->items[$this->position] == null) {
        //     return false;
        // } else {
        //     return true;
        // }
    }
}
