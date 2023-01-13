<?php

$menuArray = [
    'コーヒー',
    [
        'エスプレッソ', 'カフェオレ',
        [
            'ブレンド',
            '本日のおすすめ' => 'グァテマラ',
            '季節のコーヒー' => [0 => 'ウインターブレンド', 1 => 'キャラメルラテ'],
        ],
    ],
    2 => 'パンケーキ',
    3 => ['ホイップパンケーキ', 'フルーツパンケーキ'],
    '本日のおすすめ' => 'ウインターモンブラン'
];

$iterator = new RecursiveArrayIterator($menuArray);

iterator_apply($iterator, 'traverseStructure', [$iterator]);

function traverseStructure($iterator)
{
    while ($iterator->valid()) {
        if ($iterator->hasChildren()) {
            traverseStructure($iterator->getChildren());
        } else {
            echo $iterator->key(), ' : ', $iterator->current(), PHP_EOL;
        }
        $iterator->next();
    }
}
