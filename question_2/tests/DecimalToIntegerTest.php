<?php

use App\Price;
use PHPUnit\Framework\TestCase;

class DecimalToIntegerTest extends TestCase
{
    public function testFloat(): void
    {
        $price = new Price();
        $price->setPrice(2.50);
        $this->assertSame(2, $price->getPrice());
    }

    public function testInteger(): void
    {
        $price = new Price();
        $price->setPrice(2);
        $this->assertSame(2, $price->getPrice());
    }

    public function testNegative(): void
    {
        $price = new Price();
        $price->setPrice(-1);
        $this->assertSame(-1, $price->getPrice());
    }

    public function testZero(): void
    {
        $price = new Price();
        $price->setPrice(0);
        $this->assertSame(0, $price->getPrice());
    }

}