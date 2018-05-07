<?php

namespace packages\phpspreadsheet\Writer\Ods;

use packages\phpspreadsheet\Writer\Ods;

abstract class WriterPart
{
    /**
     * Parent Ods object.
     *
     * @var Ods
     */
    private $parentWriter;

    /**
     * Get Ods writer.
     *
     * @return Ods
     */
    public function getParentWriter()
    {
        return $this->parentWriter;
    }

    /**
     * Set parent Ods writer.
     *
     * @param Ods $writer
     */
    public function __construct(Ods $writer)
    {
        $this->parentWriter = $writer;
    }
}
