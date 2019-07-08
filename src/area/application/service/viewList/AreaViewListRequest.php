<?php
declare(strict_types=1);

namespace climb\guide\area\application\service\viewList;

class AreaViewListRequest
{
    /** @var int */
    private $countryId;

    public function __construct(int $countryId)
    {
        $this->countryId = $countryId;
    }

    /**
     * @return int
     */
    public function getCountryId(): int
    {
        return $this->countryId;
    }
}
