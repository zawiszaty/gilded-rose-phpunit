<?php

declare(strict_types=1);


namespace GildedRose\ItemsQualityUpdater;


final class BackstagePasses implements ItemsQualityUpdaterInterface
{
    public function updateQuality($quality, $sellIn): ItemsQualityUpdaterResponse
    {
        if ($quality < 50)
        {
            ++$quality;

            if ($sellIn < 11)
            {
                ++$quality;
            }

            if ($sellIn < 6)
            {
                ++$quality;
            }
        }
        --$sellIn;

        if ($sellIn < 0)
        {
            $quality -= $quality;
        }

        return new ItemsQualityUpdaterResponse($quality, $sellIn);
    }
}
