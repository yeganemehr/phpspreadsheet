<?php

namespace packages\phpspreadsheet\Chart\Renderer;

use packages\phpspreadsheet\Chart\Chart;

interface IRenderer
{
    /**
     * IRenderer constructor.
     *
     * @param \packages\phpspreadsheet\Chart\Chart $chart
     */
    public function __construct(Chart $chart);

    /**
     * Render the chart to given file (or stream).
     *
     * @param string $filename Name of the file render to
     *
     * @return bool true on success
     */
    public function render($filename);
}
