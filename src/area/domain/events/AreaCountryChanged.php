<?php
declare(strict_types=1);

namespace climb\guide\area\domain\events;

use climb\guide\core\domain\valueObject\CoreId;

class AreaCountryChanged
{
    /** @var CoreId */
    public $areaId;

    /** @var CoreId */
    public $countryId;

    /** @var CoreId */
    public $previousCountryId;

    public function __construct(CoreId $areaId, CoreId $countryId, CoreId $previousCountryId)
    {
        $this->areaId = $areaId;
        $this->countryId = $countryId;
        $this->previousCountryId = $previousCountryId;
    }
}
