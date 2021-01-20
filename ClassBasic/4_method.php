<?php

// Animalクラスにメソッドを追加してみる
class Animal {
    public function sayHello() {
        echo 'Hello Animal', PHP_EOL;
    }

    // 引数付きのメソッド（引数と返り値に型指定をしており、かつ$num2はデフォルト引数としている）
    // デフォルト引数は最後に書くこと
    public function sum (int $num1, int $num2 = 100): int {
        return $num1 + $num2;
    }
}

// 追加したメソッドを呼び出してみる
$animal = new Animal();
$animal->sayHello();
/*
 => Hello Animal
プロパティと同じくアロー演算子(->)で呼び出せる
 */

//こんな書き方もできる
(new Animal())->sayHello();
// => Hello Animal

//引数付きのメソッドを呼び出してみる
echo $animal->sum(2,4);
// => 6