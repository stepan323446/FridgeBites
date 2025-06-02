<?php

use Lycoreco\Includes\Routing\Path;
use Lycoreco\Apps\Ajax\Controllers\AjaxController;

$ajax_urls = array(
    new Path('/ajax', new AjaxController(), 'main'),
);
