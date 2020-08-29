<?php

declare(strict_types=1);


namespace GildedRose\ItemsQualityUpdater;


final class ItemsQualityUpdaterResponse
{
    /**
     * @var int
     */
    private $quality;
    /**
     * @var int
     */
    private $sellIn;

    public function __construct(int $quality, int $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn  = $sellIn;
    }

    public function getQuality(): int
    {
        return $this->quality;
    }

    public function getSellIn(): int
    {
        return $this->sellIn;
    }
}
