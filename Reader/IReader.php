<?php

namespace packages\phpspreadsheet\Reader;

interface IReader
{
    /**
     * IReader constructor.
     */
    public function __construct();

    /**
     * Can the current IReader read the file?
     *
     * @param string $pFilename
     *
     * @return bool
     */
    public function canRead($pFilename);

    /**
     * Loads PhpSpreadsheet from file.
     *
     * @param string $pFilename
     *
     * @throws Exception
     *
     * @return \packages\phpspreadsheet\Spreadsheet
     */
    public function load($pFilename);
}
