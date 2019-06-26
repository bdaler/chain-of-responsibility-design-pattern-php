<?php
require 'vendor/autoload.php';

use App\Order;
use App\Builder;
use App\GroupOne;
use App\GroupTwo;
use App\GroupThree;


$order = new Order();
$order->setOrderGroupId(3);

$builder = new Builder(
    new GroupOne,
    new GroupTwo,
    new GroupThree
);

echo $builder
    ->build()
    ->handle($order);



