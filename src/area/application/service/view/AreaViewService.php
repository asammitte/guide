<?php
declare(strict_types=1);

namespace climb\guide\area\application\service\view;

use climb\guide\area\domain\Area;
use climb\guide\area\domain\contract\AreaReadRepository;
use climb\guide\area\domain\exception\AreaNotFoundException;
use climb\guide\core\domain\valueObject\CoreId;

class AreaViewService
{
    /** @var AreaReadRepository */
    private $areaRepository;

    /**
     * @param AreaReadRepository $areaRepository
     */
    public function __construct(AreaReadRepository $areaRepository)
    {
        $this->areaRepository = $areaRepository;
    }

    /**
     * @param AreaViewRequest $dto
     * @return Area
     */
    public function execute(AreaViewRequest $dto): Area
    {
        $area = $this->areaRepository->getOne(new CoreId($dto->getId()));
        if ($area === null) {
            throw new AreaNotFoundException();
        }
        return $area;
    }
}
