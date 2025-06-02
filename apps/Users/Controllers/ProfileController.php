<?php

namespace Lycoreco\Apps\Users\Controllers;

use Lycoreco\Includes\BaseController;

class ProfileController extends BaseController
{
    protected $template_name = APPS_PATH . '/Users/Templates/profile.php';
    protected $allow_role = 'user';
}
