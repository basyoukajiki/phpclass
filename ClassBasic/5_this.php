<?php

// $thisでクラスのインスタンス自身を参照する
class Animal {
    public string $name = '犬';

    public function  sayName () {
        $name = '大きい犬';
        // 関数内の変数(ローカルスコープ変数)$nameを出力
        echo $name, PHP_EOL;

        // 同じインスタンス内で定義された$nameを出力
        echo $this->name;
    }
}

$animal = new Animal();
$animal->sayName();
/*
 => 大きい犬
    犬
 */

// プロパティだけでなく、メソッドも$thisキーワードで呼びだせる
class Animal2 {
    public string $name = '猫';

    public function  sayName () {
        echo $this->name;
    }

    public function sayName2 () {
        // $thisで同じインスタンス内にあるメソッドを呼び出す
        $this->sayName();
    }
}

$animal2 = new Animal2();
$animal2->sayName2();
// => 猫

