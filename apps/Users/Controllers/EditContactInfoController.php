<?php

namespace Lycoreco\Apps\Users\Controllers;

use Lycoreco\Includes\Model\ValidationError;
use Lycoreco\Includes\BaseController;


class EditContactInfoController extends BaseController
{
    protected $template_name = APPS_PATH . '/Users/Templates/sect_information/edit_information.php';
    protected $allow_role = 'user';

    protected function post()
    {
        $username = $_POST['username'] ?? '';
        $fname = $_POST['fname'] ?? '';
        $lname = $_POST['lname'] ?? '';

        $curr_user = CURRENT_USER;

        $curr_user->field_username = $username;
        $curr_user->field_fname = $fname;
        $curr_user->field_lname = $lname;

        try {
            $curr_user->save();
            redirect_to(get_permalink('users:profile'));
        } catch (ValidationError $ex) {
            $this->context['error_form'] = $ex;
            return;
        } catch (\Exception $ex) {
            $this->context['error_message'] = 'Unexpected error';
            return;
        }
    }
}
