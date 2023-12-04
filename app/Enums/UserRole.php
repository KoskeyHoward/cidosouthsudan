<?php

namespace App\Enums;

enum UserRole: string
{
    case SUPERADMIN = 'super-admin';
    case VOLUNTEER = 'volunteer';
    case USER = 'user';
    
}
