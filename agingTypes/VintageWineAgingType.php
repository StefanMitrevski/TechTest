<?php

namespace TechTest\agingTypes;

use TechTest\AgingInterface;
use TechTest\InventoryItem;

class VintageWineAgingType implements  AgingInterface
{
    public function updateValue(InventoryItem $item): void
    {
        $item->increaseValue(2);
    }
}
