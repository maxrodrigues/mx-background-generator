<?php

namespace App\Services\FirstStep;

use App\Services\FirstStep\Contracts\ElfFirstStepServiceContract;
use App\Traits\RollDice;

class ElfFirstStepService implements ElfFirstStepServiceContract
{
    use RollDice;

    public function setHomeland()
    {
        $option = $this->rollD100();
        if ($option <= 60)
            $homeland = 'Forest';
        if ($option > 60 && $option <= 80)
            $homeland = 'Non-Elven City or Metropolis';
        if ($option > 80 && $option <= 95)
            $homeland = 'Non-Elven Town or Village';
        if ($option > 95 && $option <= 100)
            $homeland = 'Unusual Homeland.';

        return $homeland;
    }

    public function setParents()
    {
        $option = $this->rollD100();
        if ($option <= 79)
            $parents = 'Both of your parents are alive.';
        if ($option > 79 && $option <= 87)
            $parents = 'Only your father is alive.';
        if ($option > 87 && $option <= 95)
            $parents = 'Only your mother is alive.';
        if ($option > 95 && $option <= 100)
            $parents = 'Both of your parents are dead.';

        return $parents;
    }

    public function setSiblings()
    {
        $option = $this->rollD100();
        if ($option <= 80)
            $siblings = "{$this->rollD4()} biological siblings.";
        if ($option > 80 && $option <= 85)
            $siblings = ($this->rollD4() + 1) . " biological siblings.";
        if ($option > 85 && $option <= 90)
            $siblings = ($this->rollD4() - 1) . ' biological siblings and ' . ($this->rollD4() - 1) . 'adopted siblings.';
        if ($option > 90 && $option <= 100)
            $siblings = 'No siblings';

        return $siblings;
    }

    public function setSiblingsDetail()
    {
    }
}
