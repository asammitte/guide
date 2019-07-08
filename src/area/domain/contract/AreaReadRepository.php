<?php
declare(strict_types=1);

namespace climb\guide\area\domain\contract;

use climb\guide\area\domain\AreaName;
use climb\guide\core\application\model\PaginationModel;
use climb\guide\core\domain\CoreViewList;
use climb\guide\core\domain\valueObject\CoreId;
use climb\guide\area\domain\Area;
use climb\guide\area\domain\exception\AreaNotFoundException;

interface AreaReadRepository
{
    /**
     * @param PaginationModel $pagination
     * @param CoreId $parentId
     * @return CoreViewList
     */
    public function getList(PaginationModel $pagination, CoreId $parentId): CoreViewList;

    /**
     * @param CoreId $areaId
     * @return Area
     * @throws AreaNotFoundException
     */
    public function getOne(CoreId $areaId): ?Area;

    /**
     * @param CoreId $countryId
     * @param AreaName $name
     * @return Area|null
     */
    public function getOneByCountryIdAndName(CoreId $countryId, AreaName $name): ?Area;
}
