<?php
/**
 * SEOmatic plugin for Craft CMS 3.x
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful,
 * and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2017 nystudio107
 */

namespace nystudio107\seomatic\helpers;

use yii\helpers\ReplaceArrayValue;
use yii\helpers\UnsetArrayValue;

/**
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 */
class ArrayHelper extends \craft\helpers\ArrayHelper
{
    // Public Static Methods
    // =========================================================================

    /**
     * @param array    $array
     * @param callable $callback
     *
     * @return array
     */
    public static function arrayFilterRecursive(array $array, callable $callback)
    {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                $array[$k] = self::arrayFilterRecursive($v, $callback);
            } else {
                if ($callback($v, $k)) {
                    unset($array[$k]);
                }
            }
        }

        return $array;
    }

    /**
     * @param $value
     * @param $key
     *
     * @return bool
     */
    public static function unsetEmptyChildren($value, $key)
    {
        if (is_bool($value)) {
            return false;
        } else {
            return empty($value) ? true : false;
        }
    }

    /**
     * @param $value
     * @param $key
     *
     * @return bool
     */
    public static function unsetNullChildren($value, $key)
    {
        return $value == null ? true : false;
    }
}
