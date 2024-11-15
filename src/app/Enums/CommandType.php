<?php

namespace App\Enums;

enum CommandType: string{
    case FS_CurrentDirectory = 'current_directory';
    case ARTISAN_NewModel = 'make_model';
    case ARTISAN_MakeMigration = 'make_migration';
    case ARTISAN_Migrate = 'migrate';
    case ARTISAN_MigrateFresh = 'migrate_fresh';
}