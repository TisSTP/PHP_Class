<?php
/**
 * Created by PhpStorm.
 * User: Stitch NaJa
 * Date: 3/1/2559
 * Time: 0:13
 */

namespace myclass;


use myinterface\MyInterface;
use myinterface\MyInterface2;

class ImplementsInterface implements MyInterface, MyInterface2 {

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
    public function interfaceMethod1() {
        // TODO: Implement interfaceMethod1() method.
    }

    public function interfaceMethod2() {
        // TODO: Implement interfaceMethod2() method.
    }

    public function interfaceMethod3() {
        // TODO: Implement interfaceMethod3() method.
    }

    public function interfaceMethod4() {
        // TODO: Implement interfaceMethod4() method.
    }
}