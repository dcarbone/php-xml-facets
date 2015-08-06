<?php namespace DCarbone\PHPXMLFacets;

use MyCLabs\Enum\Enum;

/**
 * Class FacetNameEnum
 * @package DCarbone\PHPXMLFacets
 */
class FacetNameEnum extends Enum
{
    const ENUMERATION = 'enumeration';
    const FRACTION_DIGITS = 'fractionDigits';

    const LENGTH = 'length';
    const MAX_LENGTH = 'maxLength';
    const MIN_LENGTH = 'minLength';

    const MAX_EXCLUSIVE = 'maxExclusive';
    const MIN_EXCLUSIVE = 'minExclusive';

    const MAX_INCLUSIVE = 'maxInclusive';
    const MIN_INCLUSIVE = 'minInclusive';

    const PATTERN = 'pattern';
    const TOTAL_DIGITS = 'totalDigits';
    const WHITE_SPACE = 'whiteSpace';
}