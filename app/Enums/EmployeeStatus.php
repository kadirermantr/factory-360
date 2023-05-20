<?php

namespace App\Enums;

enum EmployeeStatus: string
{
    case PASSIVE = 'passive';
    case INVITED = 'invited';
    case ACTIVE = 'active';
}
