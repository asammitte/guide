<?php
declare(strict_types=1);

namespace climb\guide\area\application\service\update;

use api\modules\v1\infrastructure\area\persistance\ARAreaViewRepository;
use climb\guide\area\domain\Area;
use climb\guide\area\domain\interfaces\AreaViewRepository;

class AreaUpdateService
{
    /** @var AreaUpdateRepository */
    private $areaRepository;

    /**
     * @param ARAreaUpdateRepository $areaRepository
     */
    public function __construct(ARAreaViewRepository $areaRepository)
    {
        $this->areaRepository = $areaRepository;
    }

    /**
     * @param AreaViewRequest $request
     * @return Area
     */
    public function execute(AreaViewRequest $request): Area
    {
        return $this->areaRepository->findById($request->getId());
    }
}
