<?php
declare(strict_types=1);

namespace climb\guide\core\domain;

use Assert\Assertion;

class CoreName
{
    /** @var string */
    protected $name;

    /**
     * CoreName constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        Assertion::notEmpty($name);

        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
