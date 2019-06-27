<?php
declare(strict_types=1);

namespace climb\guide\area\domain\interfaces;

use climb\guide\area\domain\Area;
use climb\guide\area\domain\AreaId;
use climb\guide\area\domain\exception\AreaNotFoundException;

interface AreaViewRepository
{
    /**
     * @param AreaId $areaId
     * @return Area
     * @throws AreaNotFoundException
     */
    public function getOne(AreaId $areaId): Area;
}
