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
 * Trait for DonateAction.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/DonateAction
 */

trait DonateActionTrait
{
    
    /**
     * A sub property of participant. The participant who is at the receiving end
     * of the action.
     *
     * @var Person|Audience|ContactPoint|Organization
     */
    public $recipient;

}
