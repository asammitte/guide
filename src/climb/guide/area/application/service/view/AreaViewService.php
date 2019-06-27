<?php
declare(strict_types=1);

namespace climb\guide\area\application\service\view;

use climb\guide\area\domain\Area;
use climb\guide\area\domain\AreaId;
use climb\guide\area\domain\interfaces\AreaViewRepository;

class AreaViewService
{
    /** @var AreaViewRepository */
    private $areaRepository;

    /**
     * @param AreaViewRepository $areaRepository
     */
    public function __construct(AreaViewRepository $areaRepository)
    {
        $this->areaRepository = $areaRepository;
    }

    /**
     * @param AreaViewDto $dto
     * @return Area
     */
    public function execute(AreaViewDto $dto): Area
    {
        return $this->areaRepository->getOne(new AreaId($dto->getId()));
    }
}
