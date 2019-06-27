<?php
declare(strict_types=1);

namespace climb\guide\area\domain;

use climb\guide\core\domain\interfaces\CoreObjectInterface;

class Area implements CoreObjectInterface
{
    /** @var AreaId */
    private $id;

    /** @var AreaCountryId */
    private $countryId;

    /** @var AreaName */
    private $name;

    /** @var AreaCoordinates */
    private $coordinates;

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

    /** @var AreaStatistics */
    private $statistics;

    public function __construct(
        AreaId $id,
        AreaCountryId $countryId,
        AreaName $name,
        AreaCoordinates $coordinates,
        AreaStatistics $statistics,
        int $rockType = 0,
        string $description = '',
        string $howToGet = '',
        string $whereToStay = '',
        string $restDay = ''
    ) {
        $this->id = $id;
        $this->countryId = $countryId;
        $this->name = $name;
        $this->coordinates = $coordinates;
        $this->statistics = $statistics;
        $this->rockType = $rockType;
        $this->description = $description;
        $this->howToGet = $howToGet;
        $this->whereToStay = $whereToStay;
        $this->restDay = $restDay;
    }

    /**
     * @return AreaId
     */
    public function getId(): AreaId
    {
        return $this->id;
    }

    /**
     * @return AreaCountryId
     */
    public function getCountryId(): AreaCountryId
    {
        return $this->countryId;
    }

    /**
     * @return AreaName
     */
    public function getName(): AreaName
    {
        return $this->name;
    }

    /**
     * @return AreaCoordinates
     */
    public function getCoordinates(): AreaCoordinates
    {
        return $this->coordinates;
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

    /**
     * @return AreaStatistics
     */
    public function getStatistics(): ?AreaStatistics
    {
        return $this->statistics;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->getId()->getId(),
            'countryId' => $this->getCountryId()->getCountryId(),
            'name' => $this->getName()->getName(),
            'coordinates' => $this->getCoordinates()->getCoordinates(),
            'rockType' => $this->getRockType(),
            'description' => $this->getDescription(),
            'howToGet' => $this->getHowToGet(),
            'whereToStay' => $this->getWhereToStay(),
            'restDay' => $this->getRestDay(),
            'statistics' => $this->getStatistics() ? $this->getStatistics()->toArray() : null,
        ];
    }
}
