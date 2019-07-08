<?php
declare(strict_types=1);

namespace climb\guide\core\domain\valueObject;

use Assert\Assertion;

class CoreRockType
{
    const TYPE_UNKNOWN = 0;
    const TYPE_GRANITE = 1;
    const TYPE_LIMESTONE = 2;
    const TYPE_SANDSTONE = 3;
    const TYPE_CONGLOMERATE = 4;

    private $rockTypes = [
        self::TYPE_GRANITE,
        self::TYPE_LIMESTONE,
        self::TYPE_SANDSTONE,
        self::TYPE_CONGLOMERATE,
    ];

    /** @var int */
    protected $rockType;

    public function __construct(?int $rockType)
    {
        $this->rockType = $rockType ?? self::TYPE_UNKNOWN;
        if ($rockType) {
            Assertion::notInArray($rockType, $this->rockTypes);
        }
    }

    /**
     * @return int
     */
    public function getRockType(): int
    {
        return $this->rockType;
    }
}
