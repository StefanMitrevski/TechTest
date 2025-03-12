<?php

namespace TechTest;
use TechTest\agingTypes\DefaultAgingType;
use TechTest\agingTypes\VintageWineAgingType;
use TechTest\agingTypes\WorldCupTicketAgingType;
use TechTest\agingTypes\PerishableItemAgingType;
use TechTest\agingTypes\GoldBarAgingType;

class InventoryItemFactory
{
    public static function create(string $name, int $value, int $sellIn): InventoryItem
    {
        $type = match ($name) {
            'Vintage Wine' => new VintageWineAgingType(),
            'World Cup Tickets' => new WorldCupTicketAgingType(),
            'Milk' => new PerishableItemAgingType(),
            'Gold Bar' => new GoldBarAgingType(),
            default => new DefaultAgingType(),
        };

        return new InventoryItem($name, $value, $sellIn, $type);
    }
}
