<?php
require_once("./ducks/MallardDuck.php");
require_once("./ducks/RubberDuck.php");
require_once("./ducks/Goose.php");
require_once("./ducks/GooseAdapter.php");
require_once("./QuackCounter/QuackCounter.php");
require_once("./factory/CountingDuckFactory.php");

class Flock
{
    public $ducks = [];

    public function add($duck)
    {
        array_push($this->ducks, $duck);
    }

    public function quack()
    {
        foreach ($this->ducks as $duck) {
            $duck->quack();
        }
    }
}

class DuckSimulator
{
    public static function main()
    {
        $simulator = new DuckSimulator();
        $duckFactory = new CountingDuckFactory();

        $simulator->simulate($duckFactory);
    }

    public function simulate($duckFactory)
    {
        $duckCall = $duckFactory->createMallardDuck();
        $rubberDuck = $duckFactory->createRubberDuck();
        $gooseDuck = new GooseAdapter(new Goose());

        // Flock = 群れ
        $flockOfDucks = new Flock();

        // コンポジットパターン
        $flockOfDucks->add($duckCall);
        $flockOfDucks->add($rubberDuck);
        $flockOfDucks->add($gooseDuck);

        $this->quack($flockOfDucks);

        echo 'カモが鳴いた回数は: ', QuackCounter::getQuacks(), '回です。';
    }

    public function quack($flockOfDucks)
    {
        // イテレーターパターン
        foreach ($flockOfDucks->ducks as $duck) {
            $duck->quack();
        }
    }
}

DuckSimulator::main();
