<?php

namespace TechTest;

final class InventoryItem implements InventoryItemInterface
{
    private string $name;
    private int $value;
    private int $sellIn;
    private AgingInterface $aging;

    public function __construct(string $name, int $value, int $sellIn, AgingInterface $aging)
    {
        $this->name = $name;
        $this->value = $value;
        $this->sellIn = $sellIn;
        $this->aging = $aging;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function value(): int
    {
        return $this->value;
    }

    public function sellIn(): int
    {
        return $this->sellIn;
    }

    public function ageByOneDay(): void
    {
        $this->aging->updateValue($this);
        $this->sellIn--;

        if ($this->name !== 'Gold Bar') {
            $this->value = max(0, min(50, $this->value));
        }
    }

    public function increaseValue(int $amount): void
    {
        $this->value += $amount;
    }

    public function setValue(int $value): void
    {
        $this->value = $value;
    }
}
