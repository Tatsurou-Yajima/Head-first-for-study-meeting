<?php
require_once("./ducks/Quackable.php");

class RubberDuck implements Quackable
{
    public function quack()
    {
        echo "RubberDuck: キュー！キュー！" . PHP_EOL;
    }
}
