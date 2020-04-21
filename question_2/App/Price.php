<?php
namespace App;

class Price
{
    /**
     * @var float
     */
    private float $price;

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return (int)$this->price;
    }

    /**
     * @param $price
     * @return $this
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }
}




