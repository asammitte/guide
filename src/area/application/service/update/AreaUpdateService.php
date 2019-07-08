<?php
declare(strict_types=1);

namespace climb\guide\area\application\service\update;

use climb\guide\area\application\service\AreaExistService;
use climb\guide\area\domain\AreaName;
use climb\guide\area\domain\contract\{
    AreaReadRepository, AreaWriteRepository
};
use climb\guide\area\domain\exception\AreaNotFoundException;
use climb\guide\core\application\contract\EventDispatcher;
use climb\guide\core\domain\valueObject\CoreId;

class AreaUpdateService
{
    /** @var AreaReadRepository */
    protected $readRepository;

    /** @var AreaWriteRepository */
    protected $writeRepository;

    /** @var AreaExistService */
    protected $existService;

    /** @var EventDispatcher */
    protected $dispatcher;

    /**
     * @param AreaReadRepository $readRepository
     * @param AreaWriteRepository $writeRepository
     * @param AreaExistService $existService
     * @param EventDispatcher $dispatcher
     */
    public function __construct(
        AreaReadRepository $readRepository,
        AreaWriteRepository $writeRepository,
        AreaExistService $existService,
        EventDispatcher $dispatcher
    )
    {
        $this->readRepository = $readRepository;
        $this->writeRepository = $writeRepository;
        $this->existService = $existService;
    }

    /**
     * @param AreaUpdateRequest $request
     * @return void
     */
    public function execute(AreaUpdateRequest $request): void
    {
        $area = $this->readRepository->getOne(new CoreId($request->getId()));
        if ($area === null) {
            throw new AreaNotFoundException();
        }
        $area->rename(new AreaName($request->getName()));
        $area->changeCountry(new CoreId($request->getCountryId()));
        $this->readRepository->getOne(new CoreId((int)$request->getId()));
        $this->dispatcher->dispatch($area->releaseEvents());
    }
}
