<?php
declare(strict_types=1);

namespace climb\guide\area\domain\exception;

class AreaNotFoundException extends \DomainException
{
    protected $message = 'Area not found.';
}
