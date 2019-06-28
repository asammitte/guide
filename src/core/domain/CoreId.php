<?php
declare(strict_types=1);

namespace climb\guide\core\domain;

use Assert\Assertion;

class CoreId
{
    /** @var int */
    protected $id;

    /**
     * CoreId constructor.
     * @param null $id
     */
    public function __construct($id = null)
    {
        Assertion::notEmpty($id);

        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param CoreId $other
     * @return bool
     */
    public function isEqualTo(self $other): bool
    {
        return $this->getId() === $other->getId();
    }
}
