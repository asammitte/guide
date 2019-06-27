<?php
declare(strict_types=1);

namespace climb\guide\core\domain;

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
    public function __construct(float $lat = 0, float $lng = 0)
    {
        $this->lat = $lat;
        $this->lng = $lng;
    }

    /**
     * @return array
     */
    public function getCoordinates()
    {
        return ['lat' => $this->lat, 'lng' => $this->lng];
    }
}
