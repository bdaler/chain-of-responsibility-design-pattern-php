<?php


namespace App;


class GroupOne extends OrderDistributor
{
    const GROUP_ID = 1;

    /**
     * @param Order $order
     * @return mixed|void
     */
    public function handle(Order $order)
    {
        if ($order->isForMe(self::GROUP_ID)){

            $order->setDistributed(true);
            return var_dump('order distributed for group: ' . __CLASS__);

        }

        var_dump('This order not for me: ' . __CLASS__);
        parent::handle($order);
    }

}