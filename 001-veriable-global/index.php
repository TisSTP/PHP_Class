<?php

include_once './NewClass.php';

$classObj  = new NewClass();

echo '<pre>';

$classObj->setCount();
$classObj->setCount();
$classObj->setCount();
$classObj->setCount();
$classObj->setCount();

echo $classObj->getCount() . '<br>';


// ----------------------------------------------------------------------
$classObj2 = new NewClass();

echo $classObj->getCount() . '<br>';


echo '</pre>';
