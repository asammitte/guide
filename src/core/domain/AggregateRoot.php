<?php

namespace climb\guide\core\domain;

interface AggregateRoot
{
    public function releaseEvents();
}
