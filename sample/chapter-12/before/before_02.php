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

// カモがいるなら、ガチョウもいるかもしれない
class Goose
{
    public function honk()
    {
        echo "Goose: ガー！" . PHP_EOL;
    }
}

// アダプターパターン
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
        $gooseDuck = new GooseAdapter(new Goose);

        $this->quack($mallardDuck);
        $this->quack($rubberDuck);
        $this->quack($gooseDuck);
    }

    public function quack(Quackable $duck)
    {
        $duck->quack();
    }
}

DuckSimulator::main();
