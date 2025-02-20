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
 * Trait for MonetaryGrant.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/MonetaryGrant
 */

trait MonetaryGrantTrait
{
    
    /**
     * A person or organization that supports (sponsors) something through some
     * kind of financial contribution.
     *
     * @var Organization|Person
     */
    public $funder;

    /**
     * The amount of money.
     *
     * @var float|Number|MonetaryAmount
     */
    public $amount;

}
