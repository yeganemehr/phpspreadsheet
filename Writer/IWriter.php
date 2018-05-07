<?php

namespace packages\phpspreadsheet\Writer;

use packages\phpspreadsheet\Spreadsheet;

interface IWriter
{
    /**
     * IWriter constructor.
     *
     * @param Spreadsheet $spreadsheet
     */
    public function __construct(Spreadsheet $spreadsheet);

    /**
     * Save PhpSpreadsheet to file.
     *
     * @param string $pFilename Name of the file to save
     *
     * @throws \packages\phpspreadsheet\Writer\Exception
     */
    public function save($pFilename);
}
