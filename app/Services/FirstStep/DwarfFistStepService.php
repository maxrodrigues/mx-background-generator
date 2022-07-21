<?php

namespace App\Services\FirstStep;

use App\Services\FirstStep\Contracts\DwarfFirstStepServiceContract;
use App\Traits\RollDice;

class DwarfFistStepService implements DwarfFirstStepServiceContract
{
    use RollDice;
    public function setHomeland()
    {
        $option = $this->rollD100();
        if ($option <= 40)
            $homeland = 'Hills or Mountains';
        if ($option > 40 && $option <= 80)
            $homeland = 'Underground';
        if ($option > 80 && $option <= 87)
            $homeland = 'Non-Dwarven Town or Village';
        if ($option > 87 && $option <= 95)
            $homeland = 'Non-Dwarven City or Metropolis';
        if ($option > 95 && $option <= 100)
            $homeland = 'Unusual Homeland.';

        return $homeland;
    }

    public function setParents()
    {
        $option = $this->rollD100();
        if ($option <= 60)
            $parents = 'Both of your parents are alive.';
        if ($option > 60 && $option <= 73)
            $parents = 'Only your father is alive.';
        if ($option > 73 && $option <= 86)
            $parents = 'Only your mother is alive.';
        if ($option > 86 && $option <= 100)
            $parents = 'Both of your parents are dead.';

        return $parents;
    }

    public function setSiblings()
    {
        $option = $this->rollD100();
        if ($option <= 80)
            $siblings = "{$this->rollD4()} biological siblings. With two or more siblings, you gain access to the Kin Guardian combat trait.";
        if ($option > 80 && $option <= 90)
            $siblings = ($this->rollD4() + 1) . " biological siblings.";
        if ($option > 90 && $option <= 95)
            $siblings = ($this->rollD4() - 1) . ' biological siblings and ' . ($this->rollD4() - 1) . 'adopted siblings.';
        if ($option > 95 && $option <= 100)
            $siblings = 'No siblings';

        return $siblings;
    }

    public function setSiblingsDetail()
    {
    }

    public function firstPartOfStory()
    {
    }
}
