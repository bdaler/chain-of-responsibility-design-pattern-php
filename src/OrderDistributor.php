<?php


namespace App;


use App\Interfaces\iHandler;

abstract class OrderDistributor implements iHandler
{
    /**
     * @var iHandler
     */
    private $nextHandler;

    /**
     * @param iHandler $handler
     * @return iHandler
     */
    public function setNext(iHandler $handler): iHandler
    {
        $this->nextHandler = $handler;

        return $handler;
    }

    /**
     * @param Order $order
     * @return mixed|void
     */
    public function handle(Order $order)
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($order);
        }

        return null;
    }

}