<?php

declare(strict_types=1);


namespace GildedRose\ItemsQualityUpdater;


final class DexterityVest implements ItemsQualityUpdaterInterface
{
    public function updateQuality($quality, $sellIn): ItemsQualityUpdaterResponse
    {
        if ($quality > 0)
        {
            --$quality;
            --$sellIn;

            if ($sellIn < 0)
            {
                --$quality;
            }
        }

        return new ItemsQualityUpdaterResponse($quality, $sellIn);
    }
}
