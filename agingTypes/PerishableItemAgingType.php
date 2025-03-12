<?php

namespace TechTest\agingTypes;

use TechTest\AgingInterface;
use TechTest\InventoryItem;

class PerishableItemAgingType implements AgingInterface
{
    public function updateValue(InventoryItem $item): void
    {
        $value = ($item->sellIn() > 0) ? 2 : 4;
        $item->increaseValue(-$value);
    }
}
