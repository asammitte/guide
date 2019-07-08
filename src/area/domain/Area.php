<?php
declare(strict_types=1);

namespace climb\guide\area\domain;

use climb\guide\core\application\traits\EventTrait;
use climb\guide\core\domain\valueObject\{
    CoreCoordinates, CoreId, CoreRockType
};
use climb\guide\core\domain\AggregateRoot;

class Area implements AggregateRoot
{
    use EventTrait;

    /** @var CoreId */
    private $id;

    /** @var CoreId */
    private $countryId;

    /** @var AreaName */
    private $name;

    /** @var CoreCoordinates */
    private $coordinates;

    /** @var CoreRockType */
    private $rockType;

    /** @var AreaInformation */
    private $information;

    public function __construct(
        ?CoreId $id,
        CoreId $countryId,
        AreaName $name,
        CoreCoordinates $coordinates,
        CoreRockType $rockType,
        AreaInformation $information
    )
    {
        $this->id = $id;
        $this->countryId = $countryId;
        $this->name = $name;
        $this->coordinates = $coordinates;
        $this->rockType = $rockType;
        $this->information = $information;
    }

    public static function create(
        CoreId $countryId,
        AreaName $name,
        CoreCoordinates $coordinates,
        CoreRockType $rockType,
        AreaInformation $information
    ): Area
    {
        $area = new self(
            null,
            $countryId,
            $name,
            $coordinates,
            $rockType,
            $information
        );
        return $area;
    }

    /**
     * @return CoreId
     */
    public function getId(): ?CoreId
    {
        return $this->id;
    }

    /**
     * @return CoreId
     */
    public function getCountryId(): CoreId
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
     * @return CoreCoordinates
     */
    public function getCoordinates(): CoreCoordinates
    {
        return $this->coordinates;
    }

    /**
     * @return CoreRockType
     */
    public function getRockType(): CoreRockType
    {
        return $this->rockType;
    }

    /**
     * @return AreaInformation
     */
    public function getInformation(): AreaInformation
    {
        return $this->information;
    }

    public function changeCountry(CoreId $countryId): void
    {
        $previousCountryId = $this->countryId;
        $this->countryId = $countryId;
        $this->recordEvent(new Events\AreaCountryChanged(new CoreId(2), $countryId, $previousCountryId));
    }

    public function areaCreated(CoreId $id): void
    {
        $this->recordEvent(new Events\AreaCreated($id));
    }

    public function toArray(): array
    {
        return [
            'id' => $this->getId()->getId(),
            'countryId' => $this->getCountryId()->getId(),
            'name' => $this->getName()->getName(),
            'coordinates' => $this->getCoordinates()->getCoordinates(),
            'rockType' => $this->getRockType()->getRockType(),
            'information' => $this->getInformation()->toArray(),
        ];
    }
}
