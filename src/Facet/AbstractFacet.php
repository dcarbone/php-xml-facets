<?php namespace DCarbone\PHPXMLFacets\Facet;

/**
 * Class AbstractFacet
 * @package DCarbone\PHPXMLFacets\Facet
 */
abstract class AbstractFacet
{
    /** @var mixed */
    protected $value;

    /**
     * Constructor
     *
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getValue();
    }
}