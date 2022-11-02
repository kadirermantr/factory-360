<?php

namespace App\Enums;

use ArchTech\Enums\InvokableCases;
use ArchTech\Enums\Values;

enum EmployeeStatus: string
{
    use InvokableCases, Values;

    case PASSIVE = 'passive';
    case INVITED = 'invited';
    case ACTIVE = 'active';
}
