<?php

namespace GildedRose;

use GildedRose\ItemsQualityUpdater\AgedBrie;
use GildedRose\ItemsQualityUpdater\BackstagePasses;
use GildedRose\ItemsQualityUpdater\Conjured;
use GildedRose\ItemsQualityUpdater\DexterityVest;
use GildedRose\ItemsQualityUpdater\ElixirOfMongoose;
use GildedRose\ItemsQualityUpdater\ItemsQualityUpdaterInterface;

class GildedRose
{
    public $name = '';
    public $quality = '';
    public $sellIn = '';

    /** @var ItemsQualityUpdaterInterface[] */
    private $items;

    public function __construct($name, $quality, $sellIn)
    {
        $this->name    = $name;
        $this->quality = $quality;
        $this->sellIn  = $sellIn;
        $this->items   = [
            "Aged Brie"                                 => new AgedBrie(),
            "Backstage passes to a TAFKAL80ETC concert" => new BackstagePasses(),
            "+5 Dexterity Vest"                         => new DexterityVest(),
            "Elixir of the Mongoose"                    => new ElixirOfMongoose(),
            "Conjured"                                  => new Conjured(),
        ];
    }

    public static function type($name, $quality, $sellIn)
    {
        return new static($name, $quality, $sellIn);
    }

    public function updateQuality()
    {
        if (array_key_exists($this->name, $this->items))
        {
            $response      = $this->items[$this->name]->updateQuality($this->quality, $this->sellIn);
            $this->quality = $response->getQuality();
            $this->sellIn  = $response->getSellIn();
        }
    }
}
