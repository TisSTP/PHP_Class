<?php
/**
 * Created by PhpStorm.
 * User: Stitch NaJa
 * Date: 3/1/2559
 * Time: 0:15
 */

namespace myclass;


use myabstract\MyAbstract3;

class ExtendsAbstract extends MyAbstract3 {

    /**
     * class ต้องมี method อย่างน้อย 1 method
     *
     * inherit
     * abstract with interface use implements
     * abstract with abstract  use extends
     * class    with abstract  use extends
     *
     */
    public function myAbstractMethod3() {
        // TODO: Implement myAbstractMethod3() method.
    }

    public function myAbstractMethod4() {
        // TODO: Implement myAbstractMethod4() method.
    }

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