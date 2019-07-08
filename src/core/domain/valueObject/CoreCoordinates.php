<?php

namespace climb\guide\core\domain\valueObject;

class CoreCoordinates
{
    /** @var float  */
    protected $lat;

    /** @var float  */
    protected $lng;

    /**
     * CoreCoordinates constructor.
     * @param float $lat
     * @param float $lng
     */
    public function __construct(?float $lat, ?float $lng)
    {
        $this->lat = $lat ?? 0;
        $this->lng = $lng ?? 0;
    }

    /**
     * @return array
     */
    public function getCoordinates()
    {
        return ['lat' => $this->lat, 'lng' => $this->lng];
    }

    /**
     * @return float
     */
    public function getLat(): float
    {
        return $this->lat;
    }

    /**
     * @return float
     */
    public function getLng(): float
    {
        return $this->lng;
    }
}
