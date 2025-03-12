<?php

namespace TechTest\agingTypes;

use TechTest\AgingInterface;
use TechTest\InventoryItem;

class WorldCupTicketAgingType implements AgingInterface
{
    public function updateValue(InventoryItem $item): void
    {
        if ($item->sellIn() <= 0) {
            $item->setValue(0);
        } else {
            $value = match (true) {
                $item->sellIn() <= 5 => 3,
                $item->sellIn() <= 10 => 2,
                default => 1,
            };
            $item->increaseValue($value);
        }
    }
}
