<?php
declare(strict_types=1);

namespace climb\guide\core\application\traits;

trait EventTrait
{
    private $events = [];

    protected function recordEvent($event): void
    {
        $this->events[] = $event;
    }

    public function releaseEvents(): array
    {
        $events = $this->events;
        $this->events = [];
        return $events;
    }
}