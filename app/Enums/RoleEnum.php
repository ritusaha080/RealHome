<?php
  
namespace App\Enums;

enum RoleEnum:string {
    case ADMIN = 'admin';
    case SUPERADMIN = 'super-admin';
    case BLOGGER = 'blogger';
    case MANAGER = 'manager';
}
