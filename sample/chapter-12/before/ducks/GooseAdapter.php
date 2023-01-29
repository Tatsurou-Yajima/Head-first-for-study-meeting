<?php
require_once("./ducks/Quackable.php");

class GooseAdapter implements Quackable
{
    private $goose;

    public function __construct(Goose $goose)
    {
        $this->goose = $goose;
    }

    public function quack()
    {
        $this->goose->honk();
    }
}
