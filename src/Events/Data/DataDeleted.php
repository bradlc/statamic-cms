<?php

namespace Statamic\Events\Data;

use Statamic\Events\Event;
use Statamic\Contracts\Data\Data;

abstract class DataDeleted extends Event
{
    /**
     * @var Data
     */
    public $data;

    /**
     * @var array
     */
    public $paths;

    /**
     * @param Data $data
     * @param array  $paths
     */
    public function __construct(Data $data, array $paths)
    {
        $this->data = $data;
        $this->paths = $paths;
    }
}
