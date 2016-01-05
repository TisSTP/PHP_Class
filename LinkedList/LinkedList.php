<?php
/**
 * Created by PhpStorm.
 * User: Stitch NaJa
 * Date: 5/1/2559
 * Time: 17:12
 */

namespace linkedlist;

class Node {
    public $data;
    public $next;

    /**
     * @param null $data
     * @param null $next
     */
    public function __construct($data = null, $next = null){
        $this->data = $data;
        $this->next = $next;

    }
}

class LinkedList {

    private $head;
    private $tail;
    private $size = 0;

    public function __construct() {
        $this->head = $this->tail = new Node();
    }

    public function add($data){
        $node = new Node($data, null);

        $this->tail->next = $node;
        $this->tail = $this->tail->next;
        $this->size++;
    }


    public function get($pos){
        return $this->go($pos)->next->data;
    }

    private function go($pos){
        $node = $this->head;
        for($i = 0; $i < $pos; $i++){
            $node = $node->next;
        }
        return $node;
    }

    public function size(){
        return $this->size;
    }
}


$linkedlis = new LinkedList();

$linkedlis->add('2');
$linkedlis->add('4');
$linkedlis->add('6');
$linkedlis->add('8');

echo $linkedlis->size();

echo $linkedlis->get(0);
echo $linkedlis->get(1);
echo $linkedlis->get(2);
echo $linkedlis->get(3);

