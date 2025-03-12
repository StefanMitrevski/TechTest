<?php
namespace TechTest;

interface AgingInterface
{
    public function updateValue(InventoryItem $item): void;
}
