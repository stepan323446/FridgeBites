<?php

namespace Lycoreco\Apps\Users\Controllers;

use Lycoreco\Includes\BaseController;

class LogoutController extends BaseController
{
    protected $template_name = APPS_PATH . '/Users/Templates/logout.php';

    protected function distinct()
    {
        logout();
        redirect_to(get_permalink('index:home'));
    }
}
