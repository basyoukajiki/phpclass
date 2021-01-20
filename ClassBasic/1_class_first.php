<?php

// クラスを定義してみる
class Animal {

}

// クラスをインスタンス化してみる(オブジェクト化ともいう)
$animal = new Animal();

// $animalの中身を見てみる
var_dump($animal);

/* 出力結果
class Animal#1 (0) {
}
*/

// get_classメソッドでクラス名を取得してみる
echo get_class($animal);
// => Animal

// 型演算子instanceofで$animalがAnimalクラスであることを確認してみる
echo $animal instanceof Animal;
// => 1  (PHPのtrueは1)

echo $animal instanceof Hoge;
/*
 => falseは何も表示されない
    厳密にいうとfalseは文字列に変換すると空文字になる
    echoは文字列出力なので...

*/
