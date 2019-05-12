<?php

namespace nystudio107\seomatic\migrations;

use nystudio107\seomatic\seoelements\SeoProduct;

use craft\db\Migration;
use craft\commerce\Plugin as CommercePlugin;

/**
 * m180711_024947_commerce_products migration.
 */
class m180711_024947_commerce_products extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        // Get all of the Commerce ProductTypes with URLs
        $commerceInstalled = class_exists(CommercePlugin::class);
        if ($commerceInstalled) {
            $commerce = CommercePlugin::getInstance();
            if ($commerce !== null) {
                SeoProduct::createAllContentMetaBundles();
            }
        }
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m180711_024947_commerce_products cannot be reverted.\n";
        return false;
    }
}
