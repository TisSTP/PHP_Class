<?php

/**
 * Created by PhpStorm.
 * User: Stitch NaJa
 * Date: 2/1/2559
 * Time: 23:20
 */

namespace myabstract;


abstract class MyAbstract{


    /**
     * abstract class ต้องมี abstract method อย่างน้อย 1 method
     *
     * inherit
     * abstract with interface use implements
     * abstract with abstract  use extends
     * class    with abstract  use extends
     *
     */
    abstract function myAbstractMethod1();


    // Property
    protected $abstract; // override


    // Method
    public function myAbstract1(){
        // code statements;
    }

}