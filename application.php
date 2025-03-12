<?php

require_once __DIR__ . '/InventoryItemInterface.php';
require_once __DIR__ . '/InventoryItemFactory.php';
require_once __DIR__ . '/InventoryItem.php';
require_once __DIR__ . '/AgingInterface.php';
require_once __DIR__ . '/agingTypes/DefaultAgingType.php';
require_once __DIR__ . '/agingTypes/VintageWineAgingType.php';
require_once __DIR__ . '/agingTypes/WorldCupTicketAgingType.php';
require_once __DIR__ . '/agingTypes/PerishableItemAgingType.php';
require_once __DIR__ . '/agingTypes/GoldBarAgingType.php';

use TechTest\InventoryItemFactory;

$items = [
    InventoryItemFactory::create('Hat', 10, 7),
    InventoryItemFactory::create('Frying Pan', 10, 4),
    InventoryItemFactory::create('Vintage Wine', 32, 0),
    InventoryItemFactory::create('World Cup Tickets', 10, 8),
    InventoryItemFactory::create('Milk', 10, 7),
    InventoryItemFactory::create('Gold Bar', 80, 0),
];

for ($i = 0; $i < 10; $i++) {
    echo 'DAY ' . $i . "\n";
    foreach ($items as $item) {
        $item->ageByOneDay();
        echo $item->name() . ': ' . $item->value() . "\n";
    }
    echo "\n";
}

