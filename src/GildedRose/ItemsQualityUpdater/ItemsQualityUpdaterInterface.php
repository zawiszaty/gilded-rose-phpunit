<?php

declare(strict_types=1);


namespace GildedRose\ItemsQualityUpdater;


interface ItemsQualityUpdaterInterface
{
    public function updateQuality($quality, $sellIn): ItemsQualityUpdaterResponse;
}
