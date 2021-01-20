<?php

// Animalクラスにオブジェクト定数を定義してみる
class Animal {
    // const を使用
    const DOG = '犬';
    const CAT = '猫';
}

// Aminmalクラスのオブジェクト定数にアクセスしてみる
$animal = new Animal();
echo $animal::DOG, PHP_EOL; // PHP_EOLは環境に依存しない改行コード
echo $animal::CAT;

/*
 => 犬
    猫
 プロパティはアロー演算子（->）でアクセスしたが、
 オブジェクト定数はダブルコロン(::)でアクセスする
 */

// オブジェクト定数はインスタンス化せずとも呼び出せる(こっちのほうがスタンダートな使い方)
echo Animal::DOG;
// => 犬

// こんな呼び出し方もできる
$className = 'Animal';
echo $className::CAT;
// => 猫

// オブジェクト定数には再代入できない
//$animal::DOG = '大きい犬';
// => エラー