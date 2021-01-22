<?php

// インスタンス化時に呼び出されるコンストラクタ関数
class Animal {

    public function __construct()
    {
        echo 'Hello', PHP_EOL;
    }
}

$animal = new Animal();
// => Hello



// コンストラクタ関数に引数を渡してみる
class Animal2 {
    public function __construct(string $name)
    {
        echo 'Hello '. $name;
    }
}

$animal2 = new Animal2('Dog');
// => Hello Dog



// オブジェクト初期化子を使ってみる(PHP8.0.0から)

class Hoge {
    public function __construct(
        // 引数にアクセス修飾子を設定した変数を定義するだけで使える
        public string $name,
        protected int $height,
        private int $size
    )
    {
        // ↑の記述で $this->name や $hoge->name が使えるようになる
    }

    public function sayHeight() {
        echo $this->height;
    }
}

$hoge = new Hoge('Hoge', 60, 30);
echo $hoge->name;
// => Hoge
$hoge->sayHeight();
// => 60


// 8.0.0以前
class Fuga {

    // ここで定義
    public string $name;
    protected int $height;
    private int $size;

    public function __construct(string $name, int $height, int $size)
    {
        // 引数で受け取った値をプロパティに代入
        $this->name = $name;
        $this->height = $height;
        $this->size = $size;
    }
}

