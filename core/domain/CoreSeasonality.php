<?php
declare(strict_types=1);

namespace climb\guide\core\domain;

class CoreSeasonality
{
    /** @var int */
    protected $jan;

    /** @var int */
    protected $feb;

    /** @var int */
    protected $mar;

    /** @var int */
    protected $apr;

    /** @var int */
    protected $may;

    /** @var int */
    protected $jun;

    /** @var int */
    protected $jul;

    /** @var int */
    protected $aug;

    /** @var int */
    protected $sep;

    /** @var int */
    protected $oct;

    /** @var int */
    protected $nov;

    /** @var int */
    protected $dec;

    public function __construct(
        int $jan = 0,
        int $feb = 0,
        int $mar = 0,
        int $apr = 0,
        int $may = 0,
        int $jun = 0,
        int $jul = 0,
        int $aug = 0,
        int $sep = 0,
        int $oct = 0,
        int $nov = 0,
        int $dec = 0
    ) {
        $this->jan = $jan;
        $this->feb = $feb;
        $this->mar = $mar;
        $this->apr = $apr;
        $this->may = $may;
        $this->jun = $jun;
        $this->jul = $jul;
        $this->aug = $aug;
        $this->sep = $sep;
        $this->oct = $oct;
        $this->nov = $nov;
        $this->dec = $dec;
    }

    /**
     * @return int
     */
    public function getJan(): int
    {
        return $this->jan;
    }

    /**
     * @return int
     */
    public function getFeb(): int
    {
        return $this->feb;
    }

    /**
     * @return int
     */
    public function getMar(): int
    {
        return $this->mar;
    }

    /**
     * @return int
     */
    public function getApr(): int
    {
        return $this->apr;
    }

    /**
     * @return int
     */
    public function getMay(): int
    {
        return $this->may;
    }

    /**
     * @return int
     */
    public function getJun(): int
    {
        return $this->jun;
    }

    /**
     * @return int
     */
    public function getJul(): int
    {
        return $this->jul;
    }

    /**
     * @return int
     */
    public function getAug(): int
    {
        return $this->aug;
    }

    /**
     * @return int
     */
    public function getSep(): int
    {
        return $this->sep;
    }

    /**
     * @return int
     */
    public function getOct(): int
    {
        return $this->oct;
    }

    /**
     * @return int
     */
    public function getNov(): int
    {
        return $this->nov;
    }

    /**
     * @return int
     */
    public function getDec(): int
    {
        return $this->dec;
    }
}
