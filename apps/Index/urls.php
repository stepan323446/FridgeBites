<?php

use Lycoreco\Apps\Index\Controllers;
use Lycoreco\Includes\Routing\Path;

$index_urls = [
    new Path('', new Controllers\HomepageController(), 'home'),
    new Path('/terms-of-use', new Controllers\TermsController(), 'terms'),
];
