<?php

namespace Lycoreco\Includes\Routing\HttpExceptions;

class NotFound404 extends PageError
{
    protected $page_error = 404;
    public function __construct($message = 'Not Found')
    {
        parent::__construct($message);
    }
}
