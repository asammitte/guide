<?php
declare(strict_types=1);

namespace climb\guide\area\application\dispatcher;

use climb\guide\core\application\contract\EventDispatcher;

class AreaEventDispatcher implements EventDispatcher
{
    public function dispatch(array $events): void
    {
        foreach ($events as $event) {
            \Yii::info('Dispatch event ' . \get_class($event));
        }
    }
}
