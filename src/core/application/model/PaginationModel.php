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

    /** @var boolean */
    private $needNext = true;

    /** @var string */
    private $sortBy;

    /** @var string */
    private $sortDir = self::DEFAULT_SORT_DIR;

    /**
     * @return int
     */
    public function getPage()
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
    public function getPerPage()
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
     * @return boolean
     * @return $this
     */
    public function isNeedNext()
    {
        return $this->needNext;
    }

    /**
     * @param boolean $needNext
     * @return $this
     */
    public function setNeedNext($needNext)
    {
        $this->needNext = $needNext;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortBy()
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
    public function getSortDir()
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
    public function setFilters(array $filters)
    {
        $this->filters = $filters;
        return $this;
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->needNext ? $this->perPage + 1 : $this->perPage;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return ($this->page - 1) * $this->perPage;
    }

    /**
     * @return string
     */
    public function getSort()
    {
        return ($this->sortBy && $this->sortDir) ? $this->sortBy . ' ' . $this->sortDir : '';
    }
}
