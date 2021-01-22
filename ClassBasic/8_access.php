<?php

// プロパティ/メソッド/定数には3種類のアクセス圏がある
class Animal {

    // どこからでもアクセス可能なpublic
    public string $hoge = 'hoge' ;

    // 定義したクラス自身、及び継承したクラスのみアクセス可能なprotected
    protected int $height = 60;

    // 定義したクラスからのみしかアクセスできないprivate
    private int $size = 30;

    protected function sayHeight ()
    {
        // 同じクラスからならアクセスできる
        echo $this->height;
    }

    private function saySize ()
    {
        // こちらも同様
        echo $this->size;
    }

    public function sayHeightAndSize()
    {
        // protected/privateなメソッド呼び出す
        $this->sayHeight();
        $this->saySize();
    }

}

$animal = new Animal();
echo $animal->hoge;
// => hoge

// アクセス権により外部からアクセスできない
/*
 echo $animal->height;
 echo $animal->size;
 */

$animal->sayHeightAndSize();
// 60 30

