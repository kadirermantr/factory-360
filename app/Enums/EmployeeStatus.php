<?php

namespace App\Enums;

enum EmployeeStatus: string
{
    case INVITED = 'invited';
    case PASSIVE = 'passive';
    case ACTIVE = 'active';
}
