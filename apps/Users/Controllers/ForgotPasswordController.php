<?php

namespace Lycoreco\Apps\Users\Controllers;

use Lycoreco\Apps\Users\Models\UserModel;
use Lycoreco\Apps\Users\Models\RecoveryPassModel;
use Lycoreco\Includes\BaseController;

class ForgotPasswordController extends BaseController
{
    protected $template_name = APPS_PATH . '/Users/Templates/forgot_password.php';

    protected function distinct()
    {
        // If current user is authorized, redirect to homepage
        if (!empty(CURRENT_USER)) {
            $home = get_permalink('index:home');
            redirect_to($home);
        }
    }
    protected function post()
    {
        require_once APPS_PATH . '/Users/functions.php';

        $email = $_POST['email'];
        if (!isset($email)) {
            $this->context['error_message'] = 'Enter your e-mail address';
            return;
        }
        $user = UserModel::get(array(
            [
                'name' => 'obj.email',
                'type' => '=',
                'value' => $email
            ]
        ));
        // If user is exists
        if ($user) {
            try {
                // Check if there was a previous request.
                if (!RecoveryPassModel::is_cooldown_available($user->get_id())) {
                    $this->context['error_message'] = 'You have already sent a request recently. Check your email or wait ' . RecoveryPassModel::get_cooldown_modifier() . '.';
                    return;
                }

                // Create recovery code
                $recovery_model = new RecoveryPassModel(array(
                    'user_id' => $user->get_id(),
                    'recovery_slug' => generate_uuid()
                ));
                $recovery_model->save();

                $link_to_recovery = get_permalink('users:reset', [$recovery_model->field_recovery_slug]);


                // E-mail template for recovery
                $body = get_recovery_email_template(
                    $user->get_public_name(),
                    $link_to_recovery
                );

                $altBody = get_recovery_email_alt_template(
                    $user->get_public_name(),
                    $link_to_recovery
                );;

                send_email(
                    'Reset Password',
                    $body,
                    $altBody,
                    $user->field_email,
                    $user->get_public_name()
                );
                $this->context['success_message'] = 'The email was sent successfully';
            } catch (\Exception $ex) {
                $this->context['error_message'] = 'Unknown error. Please try again.';
            }
        } else {
            $this->context['error_message'] = 'The user with this e-mail was not found.';
        }
    }
}
