<?php

namespace Lycoreco\Apps\Admin\Controllers\Abstract;

use Lycoreco\Includes\BaseController;

abstract class AdminBaseController extends BaseController
{
    protected $allow_role = 'admin';

    public function get_context_data()
    {
        $context  = array();

        // Add admin components (the_admin_header, ...)
        require_once APPS_PATH . '/Admin/components.php';

        return $context;
    }
}
