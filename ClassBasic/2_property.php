<?php

// Animalクラスに$nameや$ageプロパティを追加してみる
class Animal {
    // publicはアクセス権, stringは型指定
    public string $name;
    public int $age;
}

// Animalクラスをインスタンス化し、プロパティに値を代入、アクセスしてみる
$animal = new Animal();
$animal->name  = 'Dog';
echo $animal->name;
