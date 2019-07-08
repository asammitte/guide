<?php
declare(strict_types=1);

namespace climb\guide\area\domain\events;

use climb\guide\core\domain\valueObject\CoreId;

class AreaCreated
{
    /** @var CoreId */
    public $areaId;

    public function __construct(CoreId $areaId)
    {
        $this->areaId = $areaId;
    }
}
