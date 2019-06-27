<?php
declare(strict_types=1);

namespace climb\guide\core\domain;

class CoreStatistics
{
    /** @var CoreSeasonality */
    protected $seasonality;

    /** @var CoreTopClimbers */
    protected $topClimbers;

    /**
     * CoreStatistics constructor.
     * @param CoreSeasonality $seasonality
     * @param CoreTopClimbers $topClimbers
     */
    public function __construct(CoreSeasonality $seasonality, CoreTopClimbers $topClimbers)
    {
        $this->seasonality = $seasonality;
        $this->topClimbers = $topClimbers;
    }

    /**
     * @return CoreSeasonality
     */
    public function getSeasonality(): CoreSeasonality
    {
        return $this->seasonality;
    }

    /**
     * @return CoreTopClimbers
     */
    public function getTopClimbers(): CoreTopClimbers
    {
        return $this->topClimbers;
    }
}
