<?php
declare(strict_types=1);

namespace climb\guide\core\domain;

class CorePagination
{
    /** @var int */
    protected $totalCount;

    /** @var int */
    protected $currentPage;

    /** @var int */
    protected $perPage;

    /**
     * CorePagination constructor.
     * @param int $currentPage
     * @param int $perPage
     * @param int $totalCount
     */
    public function __construct(int $currentPage, int $perPage, int $totalCount)
    {
        $this->currentPage = $currentPage;
        $this->perPage = $perPage;
        $this->totalCount = $totalCount;
    }

    /**
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * @return int
     */
    public function getCurrentPage(): int
    {
        return $this->currentPage;
    }

    /**
     * @return int
     */
    public function getPerPage(): int
    {
        return $this->perPage;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'currentPage' => $this->getCurrentPage(),
            'perPage' => $this->getPerPage(),
            'totalCount' => $this->getTotalCount(),
        ];
    }
}
