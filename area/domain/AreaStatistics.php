<?php
declare(strict_types=1);

namespace climb\guide\area\domain;

use climb\guide\core\domain\CoreSeasonality;
use climb\guide\core\domain\CoreStatistics;
use climb\guide\core\domain\CoreTopClimbers;

class AreaStatistics extends CoreStatistics
{
    /** @var int */
    protected $numOfSectors;

    /**
     * AreaStatistics constructor.
     * @param CoreSeasonality $seasonality
     * @param CoreTopClimbers $topClimbers
     * @param int $numOfSectors
     */
    public function __construct(CoreSeasonality $seasonality, CoreTopClimbers $topClimbers, int $numOfSectors = 0)
    {
        parent::__construct($seasonality, $topClimbers);
    }

    /**
     * @return int
     */
    public function getNumOfSectors(): int
    {
        return $this->numOfSectors;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'seasonality' => [

            ],
            'topClimbers' => [

            ],
            'numOfSectors' => $this->numOfSectors,
        ];
    }
}
