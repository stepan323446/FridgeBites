<?php

// Paths on server
define('BASE_PATH', __DIR__);
define('APPS_PATH', BASE_PATH . '/apps');
define('INCLUDES_PATH', BASE_PATH . '/includes');
define('GLOBAL_COMPONENTS_PATH', BASE_PATH . '/components');

// Vendor
require BASE_PATH . '/vendor/autoload.php';

// Important global files
require BASE_PATH . '/config.php';
require BASE_PATH . '/functions.php';
require BASE_PATH . '/db.php';

// If Debug is on
if(DEBUG_MODE) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

// Asset folder for client
define('ASSETS_PATH', HOME_URL . '/assets');

// Current logged user (UserModel class). If unauthorized = null
define('CURRENT_USER', get_auth_user());


date_default_timezone_set(SERVER_TIMEZONE);

// Global components that can be used everywhere (footer, header, alert...)
require BASE_PATH . '/components/components.php';


// Routing
require BASE_PATH . '/urls.php';

use Lycoreco\Includes\Routing\Router;
try {
    // Display page
    Router::display_page();
    
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
} finally {
    if (isset($db)) {
        $db->close();
    }
}
?>