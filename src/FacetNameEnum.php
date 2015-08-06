<?php namespace DCarbone\PHPXMLFacets;

use MyCLabs\Enum\Enum;

/**
 * Class FacetNameEnum
 * @package DCarbone\PHPXMLFacets
 */
class FacetNameEnum extends Enum
{
    const ENUMERATION = 'enumeration';
    const FRACTION_DIGITS = 'fractiondigits';

    const LENGTH = 'length';
    const MAX_LENGTH = 'maxlength';
    const MIN_LENGTH = 'minlength';

    const MAX_EXCLUSIVE = 'maxexclusive';
    const MIN_EXCLUSIVE = 'minexclusive';

    const MAX_INCLUSIVE = 'maxinclusive';
    const MIN_INCLUSIVE = 'mininclusive';

    const PATTERN = 'pattern';
    const TOTAL_DIGITS = 'totaldigits';
    const WHITE_SPACE = 'whitespace';
}