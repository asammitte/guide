<?php
declare(strict_types=1);

namespace climb\guide\area\application\service;

use climb\guide\area\domain\Area;
use climb\guide\area\domain\contract\AreaReadRepository;

class AreaNameExistsService
{
    /** @var AreaReadRepository */
    protected $readRepository;

    /**
     * @param AreaReadRepository $readRepository
     */
    public function __construct(AreaReadRepository $readRepository)
    {
        $this->readRepository = $readRepository;
    }

    /**
     * @param Area $area
     * @return bool
     */
    public function execute(Area $area): bool
    {
        $existedArea = $this->readRepository->getOneByCountryIdAndName($area->getCountryId(), $area->getName());
        if ($existedArea === null) {
            return false;
        } elseif ($existedArea->getId() === $area->getId()) {
            return false;
        }
        return true;
    }
}
