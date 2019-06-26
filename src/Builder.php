<?php


namespace App;


use App\Interfaces\iHandler;

class Builder
{
    /**
     * @var iHandler
     */
    private $groupOne;
    /**
     * @var iHandler
     */
    private $groupTwo;
    /**
     * @var iHandler
     */
    private $groupThree;

    /**
     * Builder constructor.
     * @param iHandler $groupOne
     * @param iHandler $groupTwo
     * @param iHandler $groupThree
     */
    public function __construct(
        iHandler $groupOne,
        iHandler $groupTwo,
        iHandler $groupThree
    )
    {
        $this->groupOne = $groupOne;
        $this->groupTwo = $groupTwo;
        $this->groupThree = $groupThree;
    }

    /**
     * @return iHandler
     */
    public function build(): iHandler
    {
        $this->groupOne
            ->setNext($this->groupTwo)
            ->setNext($this->groupThree);

        return $this->groupOne;
    }
}