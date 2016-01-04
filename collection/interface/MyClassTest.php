<?php
/**
 * Created by PhpStorm.
 * User: Stitch NaJa
 * Date: 3/1/2559
 * Time: 0:00
 */

namespace myinterface;


class MyClassTest implements MyInterface2{

    /**
     * Interface Class
     * ภายในจะมี method ว่างเปล่า เพื่อทำเป็นโครงสร้าง
     *
     * inherit
     * interface with interface use extends
     * abstract  with interface use implements
     * class     with interface use implements
     *
     * implements สามารถ implements ได้ มากกว่า 1 class
     */


    // MyInterface
    public function interfaceMethod1() {
        // TODO: Implement interfaceMethod1() method.
    }

    public function interfaceMethod2() {
        // TODO: Implement interfaceMethod2() method.
    }


    // MyInterface2
    public function interfaceMethod3() {
        // TODO: Implement interfaceMethod3() method.
    }

    public function interfaceMethod4() {
        // TODO: Implement interfaceMethod4() method.
    }
}