<?php
 
namespace App\Enums;
 
enum OsTypeEnum: string
{
    case Linux = 'Linux';
    case Windows = 'WINNT';
    case Mac = 'Macos';

    case Unknown = 'Unknown';
}