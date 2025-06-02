<?php
// Header and Footer
function the_header($title, $description, $body_class = '', $meta_tags = array())
{
    include GLOBAL_COMPONENTS_PATH . '/templates/layout/header.php';
}
function the_footer($scripts = array())
{
    include GLOBAL_COMPONENTS_PATH . '/templates/layout/footer.php';
}

// E-mail
function the_email_header($preheader)
{
    include GLOBAL_COMPONENTS_PATH . '/templates/email/header.php';
}
function the_email_footer()
{
    include GLOBAL_COMPONENTS_PATH . '/templates/email/footer.php';
}

// Alert component
/**
 * Display alert element
 * @param string $text
 * @param string $type
 * @param string $support_classes
 */
function the_alert(string $text, string $type = 'warning', string $support_classes = '')
{
    $alert_class_icon = 'fa-circle-info';
    switch ($type) {
        case 'warning':
            $alert_class_icon = 'fa-circle-info';
            break;
        case 'success':
            $alert_class_icon = 'fa-circle-check';
            break;
    }

    include GLOBAL_COMPONENTS_PATH . '/templates/alert.php';
}
