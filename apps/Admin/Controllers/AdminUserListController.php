<?php
namespace Lycoreco\Apps\Admin\Controllers;


class AdminUserListController extends Abstract\AdminListController
{
    protected $model_сlass_name = "Lycoreco\Apps\Users\Models\UserModel";
    protected $table_fields = array(
        'Username' => 'field_username',
        'Public Name' => 'get_public_name()',
        'E-mail	' => 'field_email',
        'Status	' => 'get_role()',
        'Banned'  => 'is_banned()'
    );
    protected $single_router_name = 'admin:user';
    protected $create_router_name = 'admin:user-new';
    protected $verbose_name = "user";
    protected $verbose_name_multiply = "users";
}