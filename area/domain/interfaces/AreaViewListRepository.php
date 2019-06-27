<?php
declare(strict_types=1);

namespace climb\guide\area\domain\interfaces;

use climb\guide\area\domain\AreaCountryId;
use climb\guide\core\application\model\PaginationModel;
use climb\guide\core\domain\CoreViewList;

interface AreaViewListRepository
{
    /**
     * @param PaginationModel $pagination
     * @param AreaCountryId $parentId
     * @return CoreViewList
     */
    public function getList(PaginationModel $pagination, AreaCountryId $parentId): CoreViewList;
}
