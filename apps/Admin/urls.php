<?php

use Lycoreco\Apps\Admin\Controllers;
use Lycoreco\Includes\Routing\Path;

$admin_urls = [
    // Dashboard
    new Path('/admin', new Controllers\AdminHomeController(), 'home'),

    // Lists
    new Path('/admin/users', new Controllers\AdminUserListController(), 'user-list'),

    ////// Single object ///////
    // User
    new Path('/admin/user/new', new Controllers\AdminUserController(true), 'user-new'),
    new Path('/admin/user/[:int]', new Controllers\AdminUserController(false), 'user'),
    
    // Ban
    new Path('/admin/user/[:int]/banlist', new Controllers\AdminBanListController(), 'banlist'),
    new Path('/admin/user/[:int]/ban/new', new Controllers\AdminBanController(true), 'ban-new'),
    new Path('/admin/ban/[:int]', new Controllers\AdminBanController(false), 'ban'),

    // Dynamic delete for every object type
    new Path('/admin/[:string]/[:int]/delete', new Controllers\AdminDeleteController(), 'delete')
];
