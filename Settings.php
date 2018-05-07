<?php

namespace packages\phpspreadsheet;

use packages\base\cache;
use packages\base\cache\Ihandler;
use packages\phpspreadsheet\Calculation\Calculation;
use packages\phpspreadsheet\Chart\Renderer\IRenderer;

class Settings
{
    /**
     * Class name of the chart renderer used for rendering charts
     * eg: packages\phpspreadsheet\Chart\Renderer\JpGraph.
     *
     * @var string
     */
    private static $chartRenderer;

    /**
     * Default options for libxml loader.
     *
     * @var int
     */
    private static $libXmlLoaderOptions = null;

    /**
     * The cache implementation to be used for cell collection.
     *
     * @var Ihandler
     */
    private static $cache;

    /**
     * Set the locale code to use for formula translations and any special formatting.
     *
     * @param string $locale The locale code to use (e.g. "fr" or "pt_br" or "en_uk")
     *
     * @return bool Success or failure
     */
    public static function setLocale($locale)
    {
        return Calculation::getInstance()->setLocale($locale);
    }

    /**
     * Identify to PhpSpreadsheet the external library to use for rendering charts.
     *
     * @param string $rendererClass Class name of the chart renderer
     *    eg: packages\phpspreadsheet\Chart\Renderer\JpGraph
     *
     * @throws Exception
     */
    public static function setChartRenderer($rendererClass)
    {
        if (!is_a($rendererClass, IRenderer::class, true)) {
            throw new Exception('Chart renderer must implement ' . IRenderer::class);
        }

        self::$chartRenderer = $rendererClass;
    }

    /**
     * Return the Chart Rendering Library that PhpSpreadsheet is currently configured to use.
     *
     * @return null|string Class name of the chart renderer
     *    eg: packages\phpspreadsheet\Chart\Renderer\JpGraph
     */
    public static function getChartRenderer()
    {
        return self::$chartRenderer;
    }

    /**
     * Set default options for libxml loader.
     *
     * @param int $options Default options for libxml loader
     */
    public static function setLibXmlLoaderOptions($options)
    {
        if ($options === null && defined('LIBXML_DTDLOAD')) {
            $options = LIBXML_DTDLOAD | LIBXML_DTDATTR;
        }
        self::$libXmlLoaderOptions = $options;
    }

    /**
     * Get default options for libxml loader.
     * Defaults to LIBXML_DTDLOAD | LIBXML_DTDATTR when not set explicitly.
     *
     * @return int Default options for libxml loader
     */
    public static function getLibXmlLoaderOptions()
    {
        if (self::$libXmlLoaderOptions === null && defined('LIBXML_DTDLOAD')) {
            self::setLibXmlLoaderOptions(LIBXML_DTDLOAD | LIBXML_DTDATTR);
        } elseif (self::$libXmlLoaderOptions === null) {
            self::$libXmlLoaderOptions = true;
        }

        return self::$libXmlLoaderOptions;
    }

    /**
     * Sets the implementation of cache that should be used for cell collection.
     *
     * @param Ihandler $cache
     */
    public static function setCache(Ihandler $cache)
    {
        self::$cache = $cache;
    }

    /**
     * Gets the implementation of cache that should be used for cell collection.
     *
     * @return Ihandler
     */
    public static function getCache()
    {
        if (!self::$cache) {
            self::$cache = new Collection\Memory();
        }

        return self::$cache;
    }
}
