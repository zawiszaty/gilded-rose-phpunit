<?php

declare(strict_types=1);


namespace GildedRose\ItemsQualityUpdater;


final class Conjured implements ItemsQualityUpdaterInterface
{
    public function updateQuality($quality, $sellIn): ItemsQualityUpdaterResponse
    {
        $quality -= 2;
        --$sellIn;

        if ($sellIn <= 0)
        {
            $quality -= 2;
        }

        if ($quality <= 0)
        {
            $quality = 0;
        }

        return new ItemsQualityUpdaterResponse($quality, $sellIn);
    }
}
