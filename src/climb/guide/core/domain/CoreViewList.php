<?php
declare(strict_types=1);

namespace climb\guide\core\domain;

class CoreViewList
{
    /** @var CorePagination */
    protected $pagination;

    /** @var array */
    protected $items;

    public function __construct(CorePagination $pagination, array $items = [])
    {
        $this->pagination = $pagination;
        $this->items = $items;
    }

    /**
     * @return CorePagination
     */
    public function getPagination(): CorePagination
    {
        return $this->pagination;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function toArray(): array
    {
        $asArrayItems = [];
        foreach ($this->getItems() as $item) {
            $asArrayItems[] = $item->toArray();
        }
        return [
            'pagination' => $this->pagination->toArray(),
            'items' => $asArrayItems,
        ];
    }
}
