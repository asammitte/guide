<?php
declare(strict_types=1);

namespace climb\guide\core\domain\valueObject;

class CoreTopClimbers
{
    /** @var int */
    protected $first;

    /** @var int */
    protected $second;

    /** @var int */
    protected $third;

    /**
     * CoreTopClimbers constructor.
     * @param int $first
     * @param int $second
     * @param int $third
     */
    public function __construct(int $first = 0, int $second = 0, int $third = 0)
    {
        $this->first = $first;
        $this->second = $second;
        $this->third = $third;
    }

    /**
     * @return int
     */
    public function getFirst(): int
    {
        return $this->first;
    }

    /**
     * @return int
     */
    public function getSecond(): int
    {
        return $this->second;
    }

    /**
     * @return int
     */
    public function getThird(): int
    {
        return $this->third;
    }
}
