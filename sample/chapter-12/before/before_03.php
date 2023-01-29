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

class Goose
{
    public function honk()
    {
        echo "Goose: ガー！" . PHP_EOL;
    }
}

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

// デコレータパターン
class QuackCounter implements Quackable
{
    private $duck;
    private static $numberOfQuacks = 0;

    public function __construct(Quackable $duck)
    {
        $this->duck = $duck;
    }

    public function quack()
    {
        $this->duck->quack();
        self::$numberOfQuacks++;
    }

    public static function getQuacks()
    {
        return self::$numberOfQuacks;
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
        // デコレータでラップ
        $mallardDuck = new QuackCounter(new MallardDuck());
        $rubberDuck = new QuackCounter(new RubberDuck());
        $gooseDuck = new QuackCounter(new GooseAdapter(new Goose));

        $this->quack($mallardDuck);
        $this->quack($rubberDuck);
        $this->quack($gooseDuck);

        echo 'カモが鳴いた回数は: ', QuackCounter::getQuacks(), '回です。';
    }

    public function quack(Quackable $duck)
    {
        $duck->quack();
    }
}

DuckSimulator::main();
