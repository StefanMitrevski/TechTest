<?php

namespace TechTest\agingTypes;

use TechTest\AgingInterface;
use TechTest\InventoryItem;

class DefaultAgingType implements AgingInterface
{
    public function updateValue(InventoryItem $item): void
    {
        $decrease = ($item->sellIn() > 0) ? 1 : 2;
        $item->increaseValue(-$decrease);
    }
}
