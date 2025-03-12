<?php

namespace TechTest;

final class InventoryItemTest
{
    
    public function __construct(private $name, private $value, private $sellIn)
    {
    }
    
    public function name()
    {
        return $this->name;
    }
    
    public function value()
    {
        return $this->value;
    }

    public function ageByOneDay() // one function handles different behaviours, SRP issue, too complex, not scalable
    {
        //no implementation for Perishable Items
        //not easy to maintain, instead use constants or enum for item type
        if ($this->name != 'Vintage Wine' and $this->name != 'World Cup Tickets') { // too many nested conditions, hard to maintain and understand
            if ($this->value > 0) {
                if ($this->name != 'Gold Bar') {
                    $this->value = $this->value - 1;
                }
            }
        } else {
            // same condition ($this->value < 50) repeated
            if ($this->value < 50) {
                $this->value = $this->value + 1;

                if ($this->name == 'World Cup Tickets') {
                    if ($this->sellIn < 11) {
                        if ($this->value < 50) {
                            $this->value = $this->value + 1;
                        }
                    }
                    if ($this->sellIn < 6) {
                        if ($this->value < 50) {
                            $this->value = $this->value + 1;
                        }
                    }
                }
            }
        }
        // same condition repeated, unnecessary Gold Bar has fixed value
        if ($this->name != 'Gold Bar') {
            $this->sellIn = $this->sellIn - 1;
        }

        if ($this->sellIn < 0) {
            if ($this->name != 'Vintage Wine') {
                if ($this->name != 'World Cup Tickets') {
                    if ($this->value > 0) {
                        if ($this->name != 'Gold Bar') {
                            $this->value = $this->value - 1; // should decrease by 2
                        }
                    }
                } else {
                    $this->value = $this->value - $this->value;
                }
            } else {
                if ($this->value < 50) {
                    $this->value = $this->value + 1;
                }
            }
        }
    }
}
