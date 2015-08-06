<?php namespace DCarbone\PHPXMLFacets;
use DCarbone\PHPXMLFacets\Facet\AbstractFacet;
use DCarbone\PHPXMLFacets\Facet\Enumeration;
use DCarbone\PHPXMLFacets\Facet\FractionDigits;
use DCarbone\PHPXMLFacets\Facet\Length;
use DCarbone\PHPXMLFacets\Facet\MaxExclusive;
use DCarbone\PHPXMLFacets\Facet\MaxInclusive;
use DCarbone\PHPXMLFacets\Facet\MaxLength;
use DCarbone\PHPXMLFacets\Facet\MinInclusive;
use DCarbone\PHPXMLFacets\Facet\MinLength;
use DCarbone\PHPXMLFacets\Facet\Pattern;
use DCarbone\PHPXMLFacets\Facet\TotalDigits;
use DCarbone\PHPXMLFacets\Facet\WhiteSpace;

/**
 * Class FacetFactory
 * @package DCarbone\PHPXMLFacets
 */
class FacetFactory
{
    /**
     * @param string $name
     * @param mixed $value
     * @return AbstractFacet
     */
    public function getFacet($name, $value)
    {
        switch($name)
        {
            case FacetNameEnum::ENUMERATION:
                return new Enumeration($value);
            case FacetNameEnum::FRACTION_DIGITS:
                return new FractionDigits($value);
            case FacetNameEnum::LENGTH:
                return new Length($value);
            case FacetNameEnum::MAX_EXCLUSIVE:
                return new MaxExclusive($value);
            case FacetNameEnum::MAX_INCLUSIVE:
                return new MaxInclusive($value);
            case FacetNameEnum::MAX_LENGTH:
                return new MaxLength($value);
            case FacetNameEnum::MIN_INCLUSIVE:
                return new MinInclusive($value);
            case FacetNameEnum::MIN_LENGTH:
                return new MinLength($value);
            case FacetNameEnum::PATTERN:
                return new Pattern($value);
            case FacetNameEnum::TOTAL_DIGITS:
                return new TotalDigits($value);
            case FacetNameEnum::WHITE_SPACE:
                return new WhiteSpace($value);

            // Just in case...
            default:
                return null;
        }
    }
}