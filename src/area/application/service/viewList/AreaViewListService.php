<?php
declare(strict_types=1);

namespace climb\guide\area\application\service\viewList;

use climb\guide\area\domain\contract\AreaReadRepository;
use climb\guide\core\application\model\PaginationModel;
use climb\guide\core\domain\CoreViewList;
use climb\guide\core\domain\valueObject\CoreId;

class AreaViewListService
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
     * @param PaginationModel $pagination
     * @param AreaViewListRequest $dto
     * @return CoreViewList
     */
    public function execute(PaginationModel $pagination, AreaViewListRequest $dto): CoreViewList
    {
        return $this->areaRepository->getList($pagination, new CoreId($dto->getCountryId()));
    }
}
