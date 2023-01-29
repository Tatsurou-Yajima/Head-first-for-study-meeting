<?php
require_once("./ducks/Quackable.php");

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
