<?php

// Recovery password
function get_recovery_email_template(string $username, string $url_to_recovery)
{
    $preheader = 'Reset your password quickly and securely. Click the link to regain access to your account.';

    ob_start();
    require APPS_PATH . '/Users/Templates/email_templates/recovery_pass.php';
    return ob_get_clean();
}

function get_recovery_email_alt_template(string $username, string $url_to_recovery)
{
    ob_start();
    require APPS_PATH . '/Users/Templates/email_templates/recovery_pass_alt.php';
    return ob_get_clean();
}

// Reset password completed
function get_reset_completed_email_template(string $username)
{
    $preheader = 'Your Password Has Been Successfully Updated.';

    ob_start();
    require APPS_PATH . '/Users/Templates/email_templates/reset_password_compl.php';
    return ob_get_clean();
}
function get_reset_completed_email_alt_template(string $username)
{
    ob_start();
    require APPS_PATH . '/Users/Templates/email_templates/reset_password_compl_alt.php';
    return ob_get_clean();
}

// Activation account
function get_activation_email_template(string $username, string $url_to_activate) 
{
    $preheader = 'Click the link to activate your account.';

    ob_start();
    require APPS_PATH . '/Users/Templates/email_templates/activate_account.php';
    return ob_get_clean();
}
function get_activation_email_alt_template(string $username, string $url_to_activate) 
{
    ob_start();
    require APPS_PATH . '/Users/Templates/email_templates/activate_account_alt.php';
    return ob_get_clean();
}

// Ban
use Lycoreco\Apps\Users\Models\BanlistModel;
function get_ban_template(string $username, BanlistModel $model) 
{
    $preheader = 'Your account has been suspended due to a policy violation.';

    ob_start();
    require APPS_PATH . '/Users/Templates/email_templates/ban.php';
    return ob_get_clean();
}
function get_ban_alt_template(string $username, BanlistModel $model) 
{
    ob_start();
    require APPS_PATH . '/Users/Templates/email_templates/ban_alt.php';
    return ob_get_clean();
}