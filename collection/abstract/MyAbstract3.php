<?php
/**
 * Created by PhpStorm.
 * User: Stitch NaJa
 * Date: 3/1/2559
 * Time: 0:07
 */

namespace myabstract;


use myinterface\MyInterface2; // use เปรียบเสมือน import

abstract class MyAbstract3 implements MyInterface2 {

    /**
     * abstract class ต้องมี abstract method อย่างน้อย 1 method
     *
     * inherit
     * abstract with interface use implements
     * abstract with abstract  use extends
     * class    with abstract  use extends
     *
     */

    abstract function myAbstractMethod3();

    abstract function myAbstractMethod4();

}