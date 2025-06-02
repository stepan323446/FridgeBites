<?php
use Lycoreco\Includes\Routing\Router;

require APPS_PATH . '/Index/urls.php';
require APPS_PATH . '/Users/urls.php';
require APPS_PATH . '/Admin/urls.php';
require APPS_PATH . '/Ajax/urls.php';

Router::includes($index_urls, "index");
Router::includes($users_urls, 'users');
Router::includes($admin_urls, 'admin');
Router::includes($ajax_urls, 'ajax');

// Router::set_error_controller('default', new ErrorController())
?>