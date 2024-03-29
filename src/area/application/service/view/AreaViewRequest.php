<?php
declare(strict_types=1);

namespace climb\guide\area\application\service\view;

class AreaViewRequest
{
    /** @var int */
    private $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}
