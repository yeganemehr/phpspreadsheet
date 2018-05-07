<?php

namespace packages\phpspreadsheet\Helper;

class Migrator
{
    /**
     * Return the ordered mapping from old PHPExcel class names to new PhpSpreadsheet one.
     *
     * @return string[]
     */
    public function getMapping()
    {
        // Order matters here, we should have the deepest namespaces first (the most "unique" strings)
        $classes = [
            'PHPExcel_Shared_Escher_DggContainer_BstoreContainer_BSE_Blip' => \packages\phpspreadsheet\Shared\Escher\DggContainer\BstoreContainer\BSE\Blip::class,
            'PHPExcel_Shared_Escher_DgContainer_SpgrContainer_SpContainer' => \packages\phpspreadsheet\Shared\Escher\DgContainer\SpgrContainer\SpContainer::class,
            'PHPExcel_Shared_Escher_DggContainer_BstoreContainer_BSE' => \packages\phpspreadsheet\Shared\Escher\DggContainer\BstoreContainer\BSE::class,
            'PHPExcel_Shared_Escher_DgContainer_SpgrContainer' => \packages\phpspreadsheet\Shared\Escher\DgContainer\SpgrContainer::class,
            'PHPExcel_Shared_Escher_DggContainer_BstoreContainer' => \packages\phpspreadsheet\Shared\Escher\DggContainer\BstoreContainer::class,
            'PHPExcel_Shared_OLE_PPS_File' => \packages\phpspreadsheet\Shared\OLE\PPS\File::class,
            'PHPExcel_Shared_OLE_PPS_Root' => \packages\phpspreadsheet\Shared\OLE\PPS\Root::class,
            'PHPExcel_Worksheet_AutoFilter_Column_Rule' => \packages\phpspreadsheet\Worksheet\AutoFilter\Column\Rule::class,
            'PHPExcel_Writer_OpenDocument_Cell_Comment' => \packages\phpspreadsheet\Writer\Ods\Cell\Comment::class,
            'PHPExcel_Calculation_Token_Stack' => \packages\phpspreadsheet\Calculation\Token\Stack::class,
            'PHPExcel_Chart_Renderer_jpgraph' => \packages\phpspreadsheet\Chart\Renderer\JpGraph::class,
            'PHPExcel_Reader_Excel5_Escher' => \packages\phpspreadsheet\Reader\Xls\Escher::class,
            'PHPExcel_Reader_Excel5_MD5' => \packages\phpspreadsheet\Reader\Xls\MD5::class,
            'PHPExcel_Reader_Excel5_RC4' => \packages\phpspreadsheet\Reader\Xls\RC4::class,
            'PHPExcel_Reader_Excel2007_Chart' => \packages\phpspreadsheet\Reader\Xlsx\Chart::class,
            'PHPExcel_Reader_Excel2007_Theme' => \packages\phpspreadsheet\Reader\Xlsx\Theme::class,
            'PHPExcel_Shared_Escher_DgContainer' => \packages\phpspreadsheet\Shared\Escher\DgContainer::class,
            'PHPExcel_Shared_Escher_DggContainer' => \packages\phpspreadsheet\Shared\Escher\DggContainer::class,
            'CholeskyDecomposition' => \packages\phpspreadsheet\Shared\JAMA\CholeskyDecomposition::class,
            'EigenvalueDecomposition' => \packages\phpspreadsheet\Shared\JAMA\EigenvalueDecomposition::class,
            'PHPExcel_Shared_JAMA_LUDecomposition' => \packages\phpspreadsheet\Shared\JAMA\LUDecomposition::class,
            'PHPExcel_Shared_JAMA_Matrix' => \packages\phpspreadsheet\Shared\JAMA\Matrix::class,
            'QRDecomposition' => \packages\phpspreadsheet\Shared\JAMA\QRDecomposition::class,
            'PHPExcel_Shared_JAMA_QRDecomposition' => \packages\phpspreadsheet\Shared\JAMA\QRDecomposition::class,
            'SingularValueDecomposition' => \packages\phpspreadsheet\Shared\JAMA\SingularValueDecomposition::class,
            'PHPExcel_Shared_OLE_ChainedBlockStream' => \packages\phpspreadsheet\Shared\OLE\ChainedBlockStream::class,
            'PHPExcel_Shared_OLE_PPS' => \packages\phpspreadsheet\Shared\OLE\PPS::class,
            'PHPExcel_Best_Fit' => \packages\phpspreadsheet\Shared\Trend\BestFit::class,
            'PHPExcel_Exponential_Best_Fit' => \packages\phpspreadsheet\Shared\Trend\ExponentialBestFit::class,
            'PHPExcel_Linear_Best_Fit' => \packages\phpspreadsheet\Shared\Trend\LinearBestFit::class,
            'PHPExcel_Logarithmic_Best_Fit' => \packages\phpspreadsheet\Shared\Trend\LogarithmicBestFit::class,
            'polynomialBestFit' => \packages\phpspreadsheet\Shared\Trend\PolynomialBestFit::class,
            'PHPExcel_Polynomial_Best_Fit' => \packages\phpspreadsheet\Shared\Trend\PolynomialBestFit::class,
            'powerBestFit' => \packages\phpspreadsheet\Shared\Trend\PowerBestFit::class,
            'PHPExcel_Power_Best_Fit' => \packages\phpspreadsheet\Shared\Trend\PowerBestFit::class,
            'trendClass' => \packages\phpspreadsheet\Shared\Trend\Trend::class,
            'PHPExcel_Worksheet_AutoFilter_Column' => \packages\phpspreadsheet\Worksheet\AutoFilter\Column::class,
            'PHPExcel_Worksheet_Drawing_Shadow' => \packages\phpspreadsheet\Worksheet\Drawing\Shadow::class,
            'PHPExcel_Writer_OpenDocument_Content' => \packages\phpspreadsheet\Writer\Ods\Content::class,
            'PHPExcel_Writer_OpenDocument_Meta' => \packages\phpspreadsheet\Writer\Ods\Meta::class,
            'PHPExcel_Writer_OpenDocument_MetaInf' => \packages\phpspreadsheet\Writer\Ods\MetaInf::class,
            'PHPExcel_Writer_OpenDocument_Mimetype' => \packages\phpspreadsheet\Writer\Ods\Mimetype::class,
            'PHPExcel_Writer_OpenDocument_Settings' => \packages\phpspreadsheet\Writer\Ods\Settings::class,
            'PHPExcel_Writer_OpenDocument_Styles' => \packages\phpspreadsheet\Writer\Ods\Styles::class,
            'PHPExcel_Writer_OpenDocument_Thumbnails' => \packages\phpspreadsheet\Writer\Ods\Thumbnails::class,
            'PHPExcel_Writer_OpenDocument_WriterPart' => \packages\phpspreadsheet\Writer\Ods\WriterPart::class,
            'PHPExcel_Writer_PDF_Core' => \packages\phpspreadsheet\Writer\Pdf::class,
            'PHPExcel_Writer_PDF_DomPDF' => \packages\phpspreadsheet\Writer\Pdf\Dompdf::class,
            'PHPExcel_Writer_PDF_mPDF' => \packages\phpspreadsheet\Writer\Pdf\Mpdf::class,
            'PHPExcel_Writer_PDF_tcPDF' => \packages\phpspreadsheet\Writer\Pdf\Tcpdf::class,
            'PHPExcel_Writer_Excel5_BIFFwriter' => \packages\phpspreadsheet\Writer\Xls\BIFFwriter::class,
            'PHPExcel_Writer_Excel5_Escher' => \packages\phpspreadsheet\Writer\Xls\Escher::class,
            'PHPExcel_Writer_Excel5_Font' => \packages\phpspreadsheet\Writer\Xls\Font::class,
            'PHPExcel_Writer_Excel5_Parser' => \packages\phpspreadsheet\Writer\Xls\Parser::class,
            'PHPExcel_Writer_Excel5_Workbook' => \packages\phpspreadsheet\Writer\Xls\Workbook::class,
            'PHPExcel_Writer_Excel5_Worksheet' => \packages\phpspreadsheet\Writer\Xls\Worksheet::class,
            'PHPExcel_Writer_Excel5_Xf' => \packages\phpspreadsheet\Writer\Xls\Xf::class,
            'PHPExcel_Writer_Excel2007_Chart' => \packages\phpspreadsheet\Writer\Xlsx\Chart::class,
            'PHPExcel_Writer_Excel2007_Comments' => \packages\phpspreadsheet\Writer\Xlsx\Comments::class,
            'PHPExcel_Writer_Excel2007_ContentTypes' => \packages\phpspreadsheet\Writer\Xlsx\ContentTypes::class,
            'PHPExcel_Writer_Excel2007_DocProps' => \packages\phpspreadsheet\Writer\Xlsx\DocProps::class,
            'PHPExcel_Writer_Excel2007_Drawing' => \packages\phpspreadsheet\Writer\Xlsx\Drawing::class,
            'PHPExcel_Writer_Excel2007_Rels' => \packages\phpspreadsheet\Writer\Xlsx\Rels::class,
            'PHPExcel_Writer_Excel2007_RelsRibbon' => \packages\phpspreadsheet\Writer\Xlsx\RelsRibbon::class,
            'PHPExcel_Writer_Excel2007_RelsVBA' => \packages\phpspreadsheet\Writer\Xlsx\RelsVBA::class,
            'PHPExcel_Writer_Excel2007_StringTable' => \packages\phpspreadsheet\Writer\Xlsx\StringTable::class,
            'PHPExcel_Writer_Excel2007_Style' => \packages\phpspreadsheet\Writer\Xlsx\Style::class,
            'PHPExcel_Writer_Excel2007_Theme' => \packages\phpspreadsheet\Writer\Xlsx\Theme::class,
            'PHPExcel_Writer_Excel2007_Workbook' => \packages\phpspreadsheet\Writer\Xlsx\Workbook::class,
            'PHPExcel_Writer_Excel2007_Worksheet' => \packages\phpspreadsheet\Writer\Xlsx\Worksheet::class,
            'PHPExcel_Writer_Excel2007_WriterPart' => \packages\phpspreadsheet\Writer\Xlsx\WriterPart::class,
            'PHPExcel_CachedObjectStorage_CacheBase' => \packages\phpspreadsheet\Collection\Cells::class,
            'PHPExcel_CalcEngine_CyclicReferenceStack' => \packages\phpspreadsheet\Calculation\Engine\CyclicReferenceStack::class,
            'PHPExcel_CalcEngine_Logger' => \packages\phpspreadsheet\Calculation\Engine\Logger::class,
            'PHPExcel_Calculation_Functions' => \packages\phpspreadsheet\Calculation\Functions::class,
            'PHPExcel_Calculation_Function' => \packages\phpspreadsheet\Calculation\Category::class,
            'PHPExcel_Calculation_Database' => \packages\phpspreadsheet\Calculation\Database::class,
            'PHPExcel_Calculation_DateTime' => \packages\phpspreadsheet\Calculation\DateTime::class,
            'PHPExcel_Calculation_Engineering' => \packages\phpspreadsheet\Calculation\Engineering::class,
            'PHPExcel_Calculation_Exception' => \packages\phpspreadsheet\Calculation\Exception::class,
            'PHPExcel_Calculation_ExceptionHandler' => \packages\phpspreadsheet\Calculation\ExceptionHandler::class,
            'PHPExcel_Calculation_Financial' => \packages\phpspreadsheet\Calculation\Financial::class,
            'PHPExcel_Calculation_FormulaParser' => \packages\phpspreadsheet\Calculation\FormulaParser::class,
            'PHPExcel_Calculation_FormulaToken' => \packages\phpspreadsheet\Calculation\FormulaToken::class,
            'PHPExcel_Calculation_Logical' => \packages\phpspreadsheet\Calculation\Logical::class,
            'PHPExcel_Calculation_LookupRef' => \packages\phpspreadsheet\Calculation\LookupRef::class,
            'PHPExcel_Calculation_MathTrig' => \packages\phpspreadsheet\Calculation\MathTrig::class,
            'PHPExcel_Calculation_Statistical' => \packages\phpspreadsheet\Calculation\Statistical::class,
            'PHPExcel_Calculation_TextData' => \packages\phpspreadsheet\Calculation\TextData::class,
            'PHPExcel_Cell_AdvancedValueBinder' => \packages\phpspreadsheet\Cell\AdvancedValueBinder::class,
            'PHPExcel_Cell_DataType' => \packages\phpspreadsheet\Cell\DataType::class,
            'PHPExcel_Cell_DataValidation' => \packages\phpspreadsheet\Cell\DataValidation::class,
            'PHPExcel_Cell_DefaultValueBinder' => \packages\phpspreadsheet\Cell\DefaultValueBinder::class,
            'PHPExcel_Cell_Hyperlink' => \packages\phpspreadsheet\Cell\Hyperlink::class,
            'PHPExcel_Cell_IValueBinder' => \packages\phpspreadsheet\Cell\IValueBinder::class,
            'PHPExcel_Chart_Axis' => \packages\phpspreadsheet\Chart\Axis::class,
            'PHPExcel_Chart_DataSeries' => \packages\phpspreadsheet\Chart\DataSeries::class,
            'PHPExcel_Chart_DataSeriesValues' => \packages\phpspreadsheet\Chart\DataSeriesValues::class,
            'PHPExcel_Chart_Exception' => \packages\phpspreadsheet\Chart\Exception::class,
            'PHPExcel_Chart_GridLines' => \packages\phpspreadsheet\Chart\GridLines::class,
            'PHPExcel_Chart_Layout' => \packages\phpspreadsheet\Chart\Layout::class,
            'PHPExcel_Chart_Legend' => \packages\phpspreadsheet\Chart\Legend::class,
            'PHPExcel_Chart_PlotArea' => \packages\phpspreadsheet\Chart\PlotArea::class,
            'PHPExcel_Properties' => \packages\phpspreadsheet\Chart\Properties::class,
            'PHPExcel_Chart_Title' => \packages\phpspreadsheet\Chart\Title::class,
            'PHPExcel_DocumentProperties' => \packages\phpspreadsheet\Document\Properties::class,
            'PHPExcel_DocumentSecurity' => \packages\phpspreadsheet\Document\Security::class,
            'PHPExcel_Helper_HTML' => \packages\phpspreadsheet\Helper\Html::class,
            'PHPExcel_Reader_Abstract' => \packages\phpspreadsheet\Reader\BaseReader::class,
            'PHPExcel_Reader_CSV' => \packages\phpspreadsheet\Reader\Csv::class,
            'PHPExcel_Reader_DefaultReadFilter' => \packages\phpspreadsheet\Reader\DefaultReadFilter::class,
            'PHPExcel_Reader_Excel2003XML' => \packages\phpspreadsheet\Reader\Xml::class,
            'PHPExcel_Reader_Exception' => \packages\phpspreadsheet\Reader\Exception::class,
            'PHPExcel_Reader_Gnumeric' => \packages\phpspreadsheet\Reader\Gnumeric::class,
            'PHPExcel_Reader_HTML' => \packages\phpspreadsheet\Reader\Html::class,
            'PHPExcel_Reader_IReadFilter' => \packages\phpspreadsheet\Reader\IReadFilter::class,
            'PHPExcel_Reader_IReader' => \packages\phpspreadsheet\Reader\IReader::class,
            'PHPExcel_Reader_OOCalc' => \packages\phpspreadsheet\Reader\Ods::class,
            'PHPExcel_Reader_SYLK' => \packages\phpspreadsheet\Reader\Slk::class,
            'PHPExcel_Reader_Excel5' => \packages\phpspreadsheet\Reader\Xls::class,
            'PHPExcel_Reader_Excel2007' => \packages\phpspreadsheet\Reader\Xlsx::class,
            'PHPExcel_RichText_ITextElement' => \packages\phpspreadsheet\RichText\ITextElement::class,
            'PHPExcel_RichText_Run' => \packages\phpspreadsheet\RichText\Run::class,
            'PHPExcel_RichText_TextElement' => \packages\phpspreadsheet\RichText\TextElement::class,
            'PHPExcel_Shared_CodePage' => \packages\phpspreadsheet\Shared\CodePage::class,
            'PHPExcel_Shared_Date' => \packages\phpspreadsheet\Shared\Date::class,
            'PHPExcel_Shared_Drawing' => \packages\phpspreadsheet\Shared\Drawing::class,
            'PHPExcel_Shared_Escher' => \packages\phpspreadsheet\Shared\Escher::class,
            'PHPExcel_Shared_File' => \packages\phpspreadsheet\Shared\File::class,
            'PHPExcel_Shared_Font' => \packages\phpspreadsheet\Shared\Font::class,
            'PHPExcel_Shared_OLE' => \packages\phpspreadsheet\Shared\OLE::class,
            'PHPExcel_Shared_OLERead' => \packages\phpspreadsheet\Shared\OLERead::class,
            'PHPExcel_Shared_PasswordHasher' => \packages\phpspreadsheet\Shared\PasswordHasher::class,
            'PHPExcel_Shared_String' => \packages\phpspreadsheet\Shared\StringHelper::class,
            'PHPExcel_Shared_TimeZone' => \packages\phpspreadsheet\Shared\TimeZone::class,
            'PHPExcel_Shared_XMLWriter' => \packages\phpspreadsheet\Shared\XMLWriter::class,
            'PHPExcel_Shared_Excel5' => \packages\phpspreadsheet\Shared\Xls::class,
            'PHPExcel_Style_Alignment' => \packages\phpspreadsheet\Style\Alignment::class,
            'PHPExcel_Style_Border' => \packages\phpspreadsheet\Style\Border::class,
            'PHPExcel_Style_Borders' => \packages\phpspreadsheet\Style\Borders::class,
            'PHPExcel_Style_Color' => \packages\phpspreadsheet\Style\Color::class,
            'PHPExcel_Style_Conditional' => \packages\phpspreadsheet\Style\Conditional::class,
            'PHPExcel_Style_Fill' => \packages\phpspreadsheet\Style\Fill::class,
            'PHPExcel_Style_Font' => \packages\phpspreadsheet\Style\Font::class,
            'PHPExcel_Style_NumberFormat' => \packages\phpspreadsheet\Style\NumberFormat::class,
            'PHPExcel_Style_Protection' => \packages\phpspreadsheet\Style\Protection::class,
            'PHPExcel_Style_Supervisor' => \packages\phpspreadsheet\Style\Supervisor::class,
            'PHPExcel_Worksheet_AutoFilter' => \packages\phpspreadsheet\Worksheet\AutoFilter::class,
            'PHPExcel_Worksheet_BaseDrawing' => \packages\phpspreadsheet\Worksheet\BaseDrawing::class,
            'PHPExcel_Worksheet_CellIterator' => \packages\phpspreadsheet\Worksheet\CellIterator::class,
            'PHPExcel_Worksheet_Column' => \packages\phpspreadsheet\Worksheet\Column::class,
            'PHPExcel_Worksheet_ColumnCellIterator' => \packages\phpspreadsheet\Worksheet\ColumnCellIterator::class,
            'PHPExcel_Worksheet_ColumnDimension' => \packages\phpspreadsheet\Worksheet\ColumnDimension::class,
            'PHPExcel_Worksheet_ColumnIterator' => \packages\phpspreadsheet\Worksheet\ColumnIterator::class,
            'PHPExcel_Worksheet_Drawing' => \packages\phpspreadsheet\Worksheet\Drawing::class,
            'PHPExcel_Worksheet_HeaderFooter' => \packages\phpspreadsheet\Worksheet\HeaderFooter::class,
            'PHPExcel_Worksheet_HeaderFooterDrawing' => \packages\phpspreadsheet\Worksheet\HeaderFooterDrawing::class,
            'PHPExcel_WorksheetIterator' => \packages\phpspreadsheet\Worksheet\Iterator::class,
            'PHPExcel_Worksheet_MemoryDrawing' => \packages\phpspreadsheet\Worksheet\MemoryDrawing::class,
            'PHPExcel_Worksheet_PageMargins' => \packages\phpspreadsheet\Worksheet\PageMargins::class,
            'PHPExcel_Worksheet_PageSetup' => \packages\phpspreadsheet\Worksheet\PageSetup::class,
            'PHPExcel_Worksheet_Protection' => \packages\phpspreadsheet\Worksheet\Protection::class,
            'PHPExcel_Worksheet_Row' => \packages\phpspreadsheet\Worksheet\Row::class,
            'PHPExcel_Worksheet_RowCellIterator' => \packages\phpspreadsheet\Worksheet\RowCellIterator::class,
            'PHPExcel_Worksheet_RowDimension' => \packages\phpspreadsheet\Worksheet\RowDimension::class,
            'PHPExcel_Worksheet_RowIterator' => \packages\phpspreadsheet\Worksheet\RowIterator::class,
            'PHPExcel_Worksheet_SheetView' => \packages\phpspreadsheet\Worksheet\SheetView::class,
            'PHPExcel_Writer_Abstract' => \packages\phpspreadsheet\Writer\BaseWriter::class,
            'PHPExcel_Writer_CSV' => \packages\phpspreadsheet\Writer\Csv::class,
            'PHPExcel_Writer_Exception' => \packages\phpspreadsheet\Writer\Exception::class,
            'PHPExcel_Writer_HTML' => \packages\phpspreadsheet\Writer\Html::class,
            'PHPExcel_Writer_IWriter' => \packages\phpspreadsheet\Writer\IWriter::class,
            'PHPExcel_Writer_OpenDocument' => \packages\phpspreadsheet\Writer\Ods::class,
            'PHPExcel_Writer_PDF' => \packages\phpspreadsheet\Writer\Pdf::class,
            'PHPExcel_Writer_Excel5' => \packages\phpspreadsheet\Writer\Xls::class,
            'PHPExcel_Writer_Excel2007' => \packages\phpspreadsheet\Writer\Xlsx::class,
            'PHPExcel_CachedObjectStorageFactory' => \packages\phpspreadsheet\Collection\CellsFactory::class,
            'PHPExcel_Calculation' => \packages\phpspreadsheet\Calculation\Calculation::class,
            'PHPExcel_Cell' => \packages\phpspreadsheet\Cell\Cell::class,
            'PHPExcel_Chart' => \packages\phpspreadsheet\Chart\Chart::class,
            'PHPExcel_Comment' => \packages\phpspreadsheet\Comment::class,
            'PHPExcel_Exception' => \packages\phpspreadsheet\Exception::class,
            'PHPExcel_HashTable' => \packages\phpspreadsheet\HashTable::class,
            'PHPExcel_IComparable' => \packages\phpspreadsheet\IComparable::class,
            'PHPExcel_IOFactory' => \packages\phpspreadsheet\IOFactory::class,
            'PHPExcel_NamedRange' => \packages\phpspreadsheet\NamedRange::class,
            'PHPExcel_ReferenceHelper' => \packages\phpspreadsheet\ReferenceHelper::class,
            'PHPExcel_RichText' => \packages\phpspreadsheet\RichText\RichText::class,
            'PHPExcel_Settings' => \packages\phpspreadsheet\Settings::class,
            'PHPExcel_Style' => \packages\phpspreadsheet\Style\Style::class,
            'PHPExcel_Worksheet' => \packages\phpspreadsheet\Worksheet\Worksheet::class,
            'PHPExcel' => \packages\phpspreadsheet\Spreadsheet::class,
        ];

        $methods = [
            'MINUTEOFHOUR' => 'MINUTE',
            'SECONDOFMINUTE' => 'SECOND',
            'DAYOFWEEK' => 'WEEKDAY',
            'WEEKOFYEAR' => 'WEEKNUM',
            'ExcelToPHPObject' => 'excelToDateTimeObject',
            'ExcelToPHP' => 'excelToTimestamp',
            'FormattedPHPToExcel' => 'formattedPHPToExcel',
            'Cell::absoluteCoordinate' => 'Coordinate::absoluteCoordinate',
            'Cell::absoluteReference' => 'Coordinate::absoluteReference',
            'Cell::buildRange' => 'Coordinate::buildRange',
            'Cell::columnIndexFromString' => 'Coordinate::columnIndexFromString',
            'Cell::coordinateFromString' => 'Coordinate::coordinateFromString',
            'Cell::extractAllCellReferencesInRange' => 'Coordinate::extractAllCellReferencesInRange',
            'Cell::getRangeBoundaries' => 'Coordinate::getRangeBoundaries',
            'Cell::mergeRangesInCollection' => 'Coordinate::mergeRangesInCollection',
            'Cell::rangeBoundaries' => 'Coordinate::rangeBoundaries',
            'Cell::rangeDimension' => 'Coordinate::rangeDimension',
            'Cell::splitRange' => 'Coordinate::splitRange',
            'Cell::stringFromColumnIndex' => 'Coordinate::stringFromColumnIndex',
        ];

        // Keep '\' prefix for class names
        $prefixedClasses = [];
        foreach ($classes as $key => &$value) {
            $value = str_replace('PhpOffice\\', '\\PhpOffice\\', $value);
            $prefixedClasses['\\' . $key] = $value;
        }
        $mapping = $prefixedClasses + $classes + $methods;

        return $mapping;
    }

    /**
     * Search in all files in given directory.
     *
     * @param string $path
     */
    private function recursiveReplace($path)
    {
        $patterns = [
            '/*.md',
            '/*.php',
            '/*.phtml',
            '/*.txt',
            '/*.TXT',
        ];

        $from = array_keys($this->getMapping());
        $to = array_values($this->getMapping());

        foreach ($patterns as $pattern) {
            foreach (glob($path . $pattern) as $file) {
                $original = file_get_contents($file);
                $converted = str_replace($from, $to, $original);

                if ($original !== $converted) {
                    echo $file . " converted\n";
                    file_put_contents($file, $converted);
                }
            }
        }

        // Do the recursion in subdirectory
        foreach (glob($path . '/*', GLOB_ONLYDIR) as $subpath) {
            if (strpos($subpath, $path . '/') === 0) {
                $this->recursiveReplace($subpath);
            }
        }
    }

    public function migrate()
    {
        $path = realpath(getcwd());
        echo 'This will search and replace recursively in ' . $path . PHP_EOL;
        echo 'You MUST backup your files first, or you risk losing data.' . PHP_EOL;
        echo 'Are you sure ? (y/n)';

        $confirm = fread(STDIN, 1);
        if ($confirm === 'y') {
            $this->recursiveReplace($path);
        }
    }
}
