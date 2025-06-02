<?php

namespace Lycoreco\Apps\Users\Controllers;

use Lycoreco\Apps\Users\Models\{
    UserModel,
    ActivateCodeModel,
    BanlistModel
};
use Lycoreco\Includes\BaseController;

class LoginController extends BaseController
{
    protected $template_name = APPS_PATH . '/Users/Templates/login.php';

    protected function post()
    {
        $username = $_POST['username'] ?? null;
        $password = $_POST['password'] ?? null;

        if (!empty($username) && !empty($password)) {
            // Try to find user with $username
            $user = UserModel::get(
                array(
                    [
                        'name' => 'obj.username',
                        'type' => '=',
                        'value' => $username
                    ],
                    [
                        'name' => 'obj.email',
                        'type' => '=',
                        'value' => $username
                    ]
                ),
                array(),
                'OR'
            );

            // If user not found
            if (empty($user)) {
                $this->context['error_message'] = 'User not found';
                return;
            }
            // If user is not activate
            if (!$user->field_is_active) {
                ActivateCodeModel::send_activation($user);

                $this->context['error_message'] = 'Your account has not been activated. An activation email has been sent to your email address.';
                return;
            }
            if ($user->is_banned()) {
                $this->context['error_message'] = 'Your account has been banned. ';
                $ban = BanlistModel::get(array(
                    [
                        'name'  => 'obj.user_id',
                        'type'  => '=',
                        'value' =>  $user->get_id()
                    ]
                ), ['-obj.end_at']);
                $ban_comment = "Reason: $ban->field_reason. Until to $ban->field_end_at";
                $this->context['error_message'] .= $ban_comment;

                return;
            }

            // Check password is correct or not
            $is_correct_pass = $user->password_verify($password);
            if ($is_correct_pass === true) {
                set_auth_user($user->get_id());
                redirect_to(get_permalink('index:home'));
            } else {
                $this->context['error_message'] = 'You entered an incorrect password.';
                return;
            }
        }
    }

    protected function distinct()
    {
        // If current user is authorized, redirect to homepage
        if (!empty(CURRENT_USER)) {
            $home = get_permalink('index:home');
            redirect_to($home);
        }
    }
}
