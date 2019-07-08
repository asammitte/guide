<?php

namespace climb\guide\area\domain\exception;

class AreaNameExistsException extends \DomainException
{
    protected $message = 'Given name in this country already exists. Please choose a different name for this area';
}
