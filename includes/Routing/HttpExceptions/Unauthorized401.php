<?php

namespace Lycoreco\Includes\Routing\HttpExceptions;

class Unauthorized401 extends PageError
{
    protected $page_error = 401;
    public function __construct($message = 'Unauthorized')
    {
        parent::__construct($message);
    }
}
