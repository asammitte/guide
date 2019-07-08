<?php
declare(strict_types=1);

namespace climb\guide\core\application\model;

class PaginationModel
{
    const DEFAULT_PAGE = 1;
    const DEFAULT_PAGE_SIZE = 10;
    const DEFAULT_SORT_DIR = self::ORDER_ASCENDING;

    const ORDER_ASCENDING = 'ASC';
    const ORDER_DESCENDING = 'DESC';

    /** @var array */
    private $filters = array();

    /** @var int */
    private $page = self::DEFAULT_PAGE;

    /** @var int */
    private $perPage = self::DEFAULT_PAGE_SIZE;

    /** @var string */
    private $sortBy;

    /** @var string */
    private $sortDir = self::DEFAULT_SORT_DIR;

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @param int $page
     * @return $this
     */
    public function setPage($page)
    {
        $this->page = (int)$page;
        return $this;
    }

    /**
     * @return int
     */
    public function getPerPage(): int
    {
        return $this->perPage;
    }

    /**
     * @param int $perPage
     * @return $this
     */
    public function setPerPage($perPage)
    {
        $this->perPage = (int)$perPage;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortBy(): ?string
    {
        return $this->sortBy;
    }

    /**
     * @param string $sortBy
     * @return $this
     */
    public function setSortBy($sortBy)
    {
        $this->sortBy = $sortBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortDir(): ?string
    {
        return $this->sortDir;
    }

    /**
     * @param string $sortDir
     * @return $this
     */
    public function setSortDir($sortDir)
    {
        $sortDir = strtoupper($sortDir);
        if (in_array($sortDir, array(self::ORDER_ASCENDING, self::ORDER_DESCENDING))) {
            $this->sortDir = $sortDir;
        }

        return $this;
    }

    /**
     * @param array $filters
     * @return $this
     */
    public function setFilters(?array $filters = [])
    {
        $this->filters = $filters;
        return $this;
    }

    /**
     * @return array
     */
    public function getFilters(): ?array
    {
        return $this->filters;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->needNext ? $this->perPage + 1 : $this->perPage;
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return ($this->page - 1) * $this->perPage;
    }

    /**
     * @return string
     */
    public function getSort(): string
    {
        return ($this->sortBy && $this->sortDir) ? $this->sortBy . ' ' . $this->sortDir : '';
    }
}
