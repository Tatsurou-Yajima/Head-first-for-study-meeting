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

// Abstract Factory パターン
abstract class AbstractDuckFactory
{
    abstract public function createMallardDuck();
    abstract public function createRubberDuck();
}

// ファクトリー
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

class DuckSimulator
{
    public static function main()
    {
        $simulator = new self();

        $duckFactory = new CountingDuckFactory();

        // ファクトリーオブジェクトを渡す
        $simulator->simulate($duckFactory);
    }

    public function simulate(AbstractDuckFactory $duckFactory)
    {
        // Duckオブジェクトの作成はファクトリーで行う
        $mallardDuck = $duckFactory->createMallardDuck();
        $rubberDuck = $duckFactory->createRubberDuck();
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
