<?php
declare(strict_types=1);

namespace climb\guide\area\domain\contract;

use climb\guide\area\domain\Area;
use climb\guide\core\domain\valueObject\CoreId;

interface AreaWriteRepository
{
    /**
     * @param Area $area
     * @return CoreId
     */
    public function add(Area $area): CoreId;

    /**
     * @return CoreId
     */
    public function nextId(): CoreId;
}
