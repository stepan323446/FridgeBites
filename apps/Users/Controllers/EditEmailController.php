<?php

namespace Lycoreco\Apps\Users\Controllers;

use Lycoreco\Includes\Model\ValidationError;
use Lycoreco\Includes\BaseController;

class EditEmailController extends BaseController
{
    protected $template_name = APPS_PATH . '/Users/Templates/sect_information/edit_email.php';
    protected $allow_role = 'user';

    protected function post()
    {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $curr_user = CURRENT_USER;

        $curr_user->field_email = $email;

        try {
            if ($curr_user->password_verify($password)) {
                $curr_user->save();
                redirect_to(get_permalink('users:profile'));
            } else {
                $this->context['error_message'] = 'Invalid password';
            }
        } catch (ValidationError $ex) {
            $this->context['error_form'] = $ex;
            return;
        } catch (\Exception $ex) {
            $this->context['error_message'] = 'Unexpected error';
            return;
        }
    }
}
