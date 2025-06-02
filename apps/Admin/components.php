<?php

use Lycoreco\Apps\Users\Models\{
    UserModel,
    BanlistModel
};

function the_admin_header(string $title)
{
    require_once APPS_PATH . '/Admin/Templates/components/admin-header.php';
}

function the_admin_footer()
{
    require_once APPS_PATH . '/Admin/Templates/components/admin-footer.php';
}

/*
 * Widgets in the single object page
 */
function the_user_banlist(UserModel $user)
{
    $banlist = BanlistModel::filter(array(
        [
            'name'    => 'obj.user_id',
            'type'    => '=',
            'value'   => $user->get_id()
        ]
    ), 
    ['-obj.end_at']);

    require APPS_PATH . '/Admin/Templates/widgets/user_banlist.php';
}