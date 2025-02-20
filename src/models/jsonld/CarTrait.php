<?php
/**
 * SEOmatic plugin for Craft CMS 3
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2022 nystudio107
 */

namespace nystudio107\seomatic\models\jsonld;

/**
 * schema.org version: v14.0-release
 * Trait for Car.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/Car
 */

trait CarTrait
{
    
    /**
     * The permitted total weight of cargo and installations (e.g. a roof rack) on
     * top of the vehicle.  Typical unit code(s): KGM for kilogram, LBR for pound 
     * * Note 1: You can indicate additional information in the [[name]] of the
     * [[QuantitativeValue]] node. * Note 2: You may also link to a
     * [[QualitativeValue]] node that provides additional information using
     * [[valueReference]] * Note 3: Note that you can use [[minValue]] and
     * [[maxValue]] to indicate ranges.
     *
     * @var QuantitativeValue
     */
    public $roofLoad;

    /**
     * The ACRISS Car Classification Code is a code used by many car rental
     * companies, for classifying vehicles. ACRISS stands for Association of Car
     * Rental Industry Systems and Standards.
     *
     * @var string|Text
     */
    public $acrissCode;

}
