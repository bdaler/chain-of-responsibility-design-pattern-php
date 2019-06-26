<?php


namespace App;


class Order
{
    /**
     * @var bool
     */
    private $isDistributed = false;

    /**
     * Order group id
     * @var int
     */
    private $orderGroupId;

    /**
     * @return bool
     */
    public function isNew(): bool
    {
        return $this->isDistributed;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function setDistributed(bool $value): Order
    {
        $this->isDistributed = $value;

        return $this;
    }

    /**
     * @param int $groupId
     * @return bool
     */
    public function isForMe(int $groupId): bool
    {
        return $this->orderGroupId === $groupId;
    }

    /**
     * @param int $orderGroupId
     * @return Order
     */
    public function setOrderGroupId(int $orderGroupId): Order
    {
        $this->orderGroupId = $orderGroupId;

        return $this;
    }


}