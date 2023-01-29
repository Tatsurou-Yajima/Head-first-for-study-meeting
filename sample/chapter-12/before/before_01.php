<?php

interface Quackable
{
    public function quack();
}

class MallardDuck implements Quackable
{
    public function quack()
    {
        echo "MallardDuck: ガー！ガー！" . PHP_EOL;
    }
}

class RubberDuck implements Quackable
{
    public function quack()
    {
        echo "RubberDuck: キュー！キュー！" . PHP_EOL;
    }
}

class DuckSimulator
{

    public static function main()
    {
        $simulator = new self();
        $simulator->simulate();
    }

    public function simulate()
    {
        $mallardDuck = new MallardDuck();
        $rubberDuck = new RubberDuck();

        $this->quack($mallardDuck);
        $this->quack($rubberDuck);
    }

    public function quack(Quackable $duck)
    {
        $duck->quack();
    }
}

DuckSimulator::main();
