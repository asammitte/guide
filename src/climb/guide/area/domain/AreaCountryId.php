<?php
declare(strict_types=1);

namespace climb\guide\area\domain;

use climb\guide\core\domain\CoreId;

class AreaCountryId extends CoreId
{
    /**
     * @return int
     */
    public function getCountryId()
    {
        return $this->id;
    }
}