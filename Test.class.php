<?php

class Test {

    /**
     * Property Declaration
     */
    const MYCONST = 'const';  // ค่าคงที่
    private static $myStatic = 'static';
    private $myPrivate = 'private';
    protected $myProtected = 'protected';
    public $myPublic = 'public';


    /**
     *  Method Declaration
     */

    // Constructor
    public function __construct() {
        # self => this
        self::MYCONST;
        self::$myStatic;
        self::getMyPrivate();
//        self::$myStatic = '454';
    }


    // Setter And Getter
    public function setMyPrivete($pri = null){
        $this->myPrivate = $pri;
    }

    public function getMyPrivate(){
        return $this->myPrivate;
    }


    public function _toString(){

    }

}

?>