<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Migration Paths
    |--------------------------------------------------------------------------
    |
    | 01. By default all sub directories will be registered inside the migrations folders
    | - migrations
    | -- dir1
    | -- dir2
    | ---- dir2.1
    |
    | 02. You can register additional directories outside the migrations folder
    */

    'paths' => [
        database_path('migrations'),
        database_path('migrations/users'),
        database_path('migrations/roles_and_permissions'),
        database_path('migrations/departments'),
    ],
];
