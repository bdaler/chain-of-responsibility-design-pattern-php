<?php

namespace App\Interfaces;

use App\Order;

interface iHandler
{
    /**
     * @param iHandler $handler
     * @return mixed
     */
    public function setNext(iHandler $handler): iHandler;

    /**
     * @param Order $order
     * @return mixed
     */
    public function handle(Order $order);
}