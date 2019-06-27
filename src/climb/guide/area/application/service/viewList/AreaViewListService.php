<?php
declare(strict_types=1);

namespace climb\guide\area\application\service\viewList;

use climb\guide\area\domain\AreaCountryId;
use climb\guide\area\domain\interfaces\AreaViewListRepository;
use climb\guide\core\application\model\PaginationModel;
use climb\guide\core\domain\CoreViewList;

class AreaViewListService
{
    /** @var AreaViewListRepository */
    private $areaRepository;

    /**
     * @param AreaViewListRepository $areaRepository
     */
    public function __construct(AreaViewListRepository $areaRepository)
    {
        $this->areaRepository = $areaRepository;
    }

    /**
     * @param PaginationModel $pagination
     * @param AreaViewListDto $dto
     * @return CoreViewList
     */
    public function execute(PaginationModel $pagination, AreaViewListDto $dto): CoreViewList
    {
        return $this->areaRepository->getList($pagination, new AreaCountryId($dto->getCountryId()));
    }
}
