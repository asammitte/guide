<?php
declare(strict_types=1);

namespace climb\guide\area\application\service\add;

use climb\guide\area\application\dispatcher\AreaEventDispatcher;
use climb\guide\area\application\service\AreaNameExistsService;
use climb\guide\area\domain\{
    Area, AreaInformation, AreaName, exception\AreaNameExistsException
};
use climb\guide\area\domain\contract\AreaWriteRepository;
use climb\guide\core\domain\valueObject\{
    CoreCoordinates, CoreId, CoreRockType
};

class AreaAddService
{
    /** @var AreaWriteRepository */
    protected $writeRepository;

    /** @var AreaNameExistsService */
    protected $nameExistsService;

    /** @var AreaEventDispatcher */
    protected $dispatcher;

    /**
     * @param AreaWriteRepository $writeRepository
     * @param AreaNameExistsService $nameExistsService
     * @param AreaEventDispatcher $dispatcher
     */
    public function __construct(
        AreaWriteRepository $writeRepository,
        AreaNameExistsService $nameExistsService,
        AreaEventDispatcher $dispatcher
    )
    {
        $this->writeRepository = $writeRepository;
        $this->nameExistsService = $nameExistsService;
        $this->dispatcher = $dispatcher;
    }

    public function execute(AreaAddRequest $request): CoreId
    {
        $area = Area::create(
            new CoreId($request->getCountryId()),
            new AreaName($request->getName()),
            new CoreCoordinates($request->getLat(), $request->getLng()),
            new CoreRockType($request->getRockType()),
            new AreaInformation(
                $request->getDescription(),
                $request->getHowToGet(),
                $request->getWhereToStay(),
                $request->getRestDay()
            )
        );
        if ($this->nameExistsService->execute($area)) {
            throw new AreaNameExistsException();
        }

        $areaId = $this->writeRepository->add($area);
        $area->areaCreated($areaId);

        $this->dispatcher->dispatch($area->releaseEvents());
        return $areaId;
    }
}
