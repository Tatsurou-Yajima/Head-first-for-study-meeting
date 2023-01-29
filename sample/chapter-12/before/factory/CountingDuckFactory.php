<?php
require_once("./ducks/MallardDuck.php");
require_once("./ducks/RubberDuck.php");
require_once("./ducks/Goose.php");
require_once("./ducks/GooseAdapter.php");
require_once("./QuackCounter/QuackCounter.php");

// Abstract Factory パターン
abstract class AbstractDuckFactory
{
    abstract public function createMallardDuck();
    abstract public function createRubberDuck();
}

class CountingDuckFactory extends AbstractDuckFactory
{
    public function createMallardDuck()
    {
        return new QuackCounter(new MallardDuck());
    }

    public function createRubberDuck()
    {
        return new QuackCounter(new RubberDuck());
    }
}
