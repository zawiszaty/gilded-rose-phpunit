<?php

declare(strict_types=1);

namespace GildedRose\ItemsQualityUpdater;

final class AgedBrie implements ItemsQualityUpdaterInterface
{
    public function updateQuality($quality, $sellIn): ItemsQualityUpdaterResponse
    {
        if ($quality < 50)
        {
            ++$quality;
        }
        --$sellIn;

        if (($sellIn < 0) && $quality < 50)
        {
            ++$quality;
        }

        return new ItemsQualityUpdaterResponse($quality, $sellIn);
    }
}
