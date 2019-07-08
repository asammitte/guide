<?php
declare(strict_types=1);

namespace climb\guide\area\domain;

class AreaInformation
{
    /** @var string */
    private $description;

    /** @var string */
    private $howToGet;

    /** @var string */
    private $whereToStay;

    /** @var string */
    private $restDay;

    public function __construct(
        ?string $description,
        ?string $howToGet,
        ?string $whereToStay,
        ?string $restDay
    )
    {
        $this->description = $description ?? '';
        $this->howToGet = $howToGet ?? '';
        $this->whereToStay = $whereToStay ?? '';
        $this->restDay = $restDay ?? '';
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getHowToGet(): string
    {
        return $this->howToGet;
    }

    /**
     * @return string
     */
    public function getWhereToStay(): string
    {
        return $this->whereToStay;
    }

    /**
     * @return string
     */
    public function getRestDay(): string
    {
        return $this->restDay;
    }

    public function toArray(): array
    {
        return [
            'description' => $this->getDescription(),
            'howToGet' => $this->getHowToGet(),
            'whereToStay' => $this->getWhereToStay(),
            'restDay' => $this->getRestDay(),
        ];
    }
}
