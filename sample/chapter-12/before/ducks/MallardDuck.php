<?php
require_once("./ducks/Quackable.php");

class MallardDuck implements Quackable
{
    public function quack()
    {
        echo "MallardDuck: ガー！ガー！" . PHP_EOL;
    }
}
