<?php
declare(strict_types=1);

namespace climb\guide\area\application\service\add;

class AreaAddRequest
{
    /** @var int */
    private $countryId;

    /** @var string */
    private $name;

    /** @var float */
    private $lat;

    /** @var float */
    private $lng;

    /** @var int */
    private $rockType;

    /** @var string */
    private $description;

    /** @var string */
    private $howToGet;

    /** @var string */
    private $whereToStay;

    /** @var string */
    private $restDay;

    /**
     * AreaCreateDto constructor.
     * @param int $countryId
     * @param string $name
     * @param float $lat
     * @param float $lng
     * @param int $rockType
     * @param string $description
     * @param string $howToGet
     * @param string $whereToStay
     * @param string $restDay
     */
    public function __construct(
        int $countryId,
        string $name,
        ?float $lat,
        ?float $lng,
        ?int $rockType,
        ?string $description,
        ?string $howToGet,
        ?string $whereToStay,
        ?string $restDay
    )
    {
        $this->countryId = $countryId;
        $this->name = $name;
        $this->lat = $lat;
        $this->lng = $lng;
        $this->rockType = $rockType;
        $this->description = $description;
        $this->howToGet = $howToGet;
        $this->whereToStay = $whereToStay;
        $this->restDay = $restDay;
    }

    /**
     * @return int
     */
    public function getCountryId(): int
    {
        return $this->countryId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getLat(): ?float
    {
        return $this->lat;
    }

    /**
     * @return float
     */
    public function getLng(): ?float
    {
        return $this->lng;
    }

    /**
     * @return int
     */
    public function getRockType(): ?int
    {
        return $this->rockType;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getHowToGet(): ?string
    {
        return $this->howToGet;
    }

    /**
     * @return string
     */
    public function getWhereToStay(): ?string
    {
        return $this->whereToStay;
    }

    /**
     * @return string
     */
    public function getRestDay(): ?string
    {
        return $this->restDay;
    }
}
