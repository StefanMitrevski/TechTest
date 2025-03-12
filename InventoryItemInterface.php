<?php

namespace TechTest;

interface InventoryItemInterface
{
    public function name(): string;
    public function value(): int;
    public function sellIn(): int;
    public function ageByOneDay(): void;
}
