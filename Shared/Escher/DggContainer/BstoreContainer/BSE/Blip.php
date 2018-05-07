<?php

namespace packages\phpspreadsheet\Shared\Escher\DggContainer\BstoreContainer\BSE;

class Blip
{
    /**
     * The parent BSE.
     *
     * @var \packages\phpspreadsheet\Shared\Escher\DggContainer\BstoreContainer\BSE
     */
    private $parent;

    /**
     * Raw image data.
     *
     * @var string
     */
    private $data;

    /**
     * Get the raw image data.
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the raw image data.
     *
     * @param string $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * Set parent BSE.
     *
     * @param \packages\phpspreadsheet\Shared\Escher\DggContainer\BstoreContainer\BSE $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * Get parent BSE.
     *
     * @return \packages\phpspreadsheet\Shared\Escher\DggContainer\BstoreContainer\BSE $parent
     */
    public function getParent()
    {
        return $this->parent;
    }
}
