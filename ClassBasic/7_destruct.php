<?php

// オブジェクト破棄時に実行されるデストラクト関数
class Animal {

    public function __destruct()
    {
        echo 'Destroyed!!!!!!!!!!';
    }
}

/**
 * 破棄されるタイミングとは？
 * ・スクリプトが終了する時
 * ・unsetやnullを代入する時
 * -> オブジェクトを参照するリファレンスがひとつもなくなったとき
 */

$animal = new Animal();

$animal = null;
echo '参照先がなくなったので、↑の時点でデストラクト関数が動く';

/*
 $animal = null; をコメントアウトすると、
 スクリプトが終了するまでオブジェクトは破棄されないので、
 ↑のecho命令の次にデストラクト関数が動く
 */
