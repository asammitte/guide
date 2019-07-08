<?php

namespace climb\guide\core\application\contract;

interface EventDispatcher
{
    /**
     * @param array $events
     */
    public function dispatch(array $events): void;
}
