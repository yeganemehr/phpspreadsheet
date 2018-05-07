<?php

namespace packages\phpspreadsheet\Collection;

use packages\phpspreadsheet\Settings;
use packages\phpspreadsheet\Worksheet\Worksheet;

abstract class CellsFactory
{
    /**
     * Initialise the cache storage.
     *
     * @param Worksheet $parent Enable cell caching for this worksheet
     *
     * @return Cells
     * */
    public static function getInstance(Worksheet $parent)
    {
        $instance = new Cells($parent, Settings::getCache());

        return $instance;
    }
}
