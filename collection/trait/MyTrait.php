<?php
/**
 * Created by PhpStorm.
 * User: Stitch NaJa
 * Date: 5/1/2559
 * Time: 15:12
 */

namespace mytrait;


trait MyTrait  {

}

class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();