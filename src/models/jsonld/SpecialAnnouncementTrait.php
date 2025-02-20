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
 * Trait for SpecialAnnouncement.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/SpecialAnnouncement
 */

trait SpecialAnnouncementTrait
{
    
    /**
     * governmentBenefitsInfo provides information about government benefits
     * associated with a SpecialAnnouncement.
     *
     * @var GovernmentService
     */
    public $governmentBenefitsInfo;

    /**
     * A category for the item. Greater signs or slashes can be used to informally
     * indicate a category hierarchy.
     *
     * @var string|URL|Text|PhysicalActivityCategory|Thing|CategoryCode
     */
    public $category;

    /**
     * Statistical information about the spread of a disease, either as
     * [[WebContent]], or   described directly as a [[Dataset]], or the specific
     * [[Observation]]s in the dataset. When a [[WebContent]] URL is   provided,
     * the page indicated might also contain more such markup.
     *
     * @var Dataset|Observation|WebContent|URL
     */
    public $diseaseSpreadStatistics;

    /**
     * Information about getting tested (for a [[MedicalCondition]]), e.g. in the
     * context of a pandemic.
     *
     * @var WebContent|URL
     */
    public $gettingTestedInfo;

    /**
     * Indicates a specific [[CivicStructure]] or [[LocalBusiness]] associated
     * with the SpecialAnnouncement. For example, a specific testing facility or
     * business with special opening hours. For a larger geographic region like a
     * quarantine of an entire region, use [[spatialCoverage]].
     *
     * @var CivicStructure|LocalBusiness
     */
    public $announcementLocation;

    /**
     * Information about travel bans, e.g. in the context of a pandemic.
     *
     * @var URL|WebContent
     */
    public $travelBans;

    /**
     * Information about disease prevention.
     *
     * @var URL|WebContent
     */
    public $diseasePreventionInfo;

    /**
     * Information about public transport closures.
     *
     * @var URL|WebContent
     */
    public $publicTransportClosuresInfo;

    /**
     * Information about school closures.
     *
     * @var WebContent|URL
     */
    public $schoolClosuresInfo;

    /**
     * Publication date of an online listing.
     *
     * @var Date|DateTime
     */
    public $datePosted;

    /**
     * Indicates a page with news updates and guidelines. This could often be (but
     * is not required to be) the main page containing [[SpecialAnnouncement]]
     * markup on a site.
     *
     * @var URL|WebContent
     */
    public $newsUpdatesAndGuidelines;

    /**
     * Guidelines about quarantine rules, e.g. in the context of a pandemic.
     *
     * @var URL|WebContent
     */
    public $quarantineGuidelines;

    /**
     * The URL for a feed, e.g. associated with a podcast series, blog, or series
     * of date-stamped updates. This is usually RSS or Atom.
     *
     * @var DataFeed|URL
     */
    public $webFeed;

}
