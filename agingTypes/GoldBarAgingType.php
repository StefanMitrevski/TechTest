<?php

namespace TechTest\agingTypes;

use TechTest\AgingInterface;
use TechTest\InventoryItem;

class GoldBarAgingType implements AgingInterface
{
    public function updateValue(InventoryItem $item): void
    {
        // value always same
    }
}
