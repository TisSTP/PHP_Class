<?php
/**
 * Created by PhpStorm.
 * User: Stitch NaJa
 * Date: 2/1/2559
 * Time: 23:31
 */

namespace myinterface; // namespace เปรียบเสมือน ชื่อ package

interface MyInterface {

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
    public function interfaceMethod1();


    public function interfaceMethod2();

}