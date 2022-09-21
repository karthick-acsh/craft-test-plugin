<?php
/**
 * test-plugin plugin for Craft CMS 3.x
 *
 * this the test plugin
 *
 * @link      https://github.com/karthick-acsh
 * @copyright Copyright (c) 2022 karthikeyan
 */

namespace karthickacsh\testplugintests\unit;

use Codeception\Test\Unit;
use UnitTester;
use Craft;
use karthickacsh\testplugin\Testplugin;

/**
 * ExampleUnitTest
 *
 *
 * @author    karthikeyan
 * @package   Testplugin
 * @since     1.0.0
 */
class ExampleUnitTest extends Unit
{
    // Properties
    // =========================================================================

    /**
     * @var UnitTester
     */
    protected $tester;

    // Public methods
    // =========================================================================

    // Tests
    // =========================================================================

    /**
     *
     */
    public function testPluginInstance()
    {
        $this->assertInstanceOf(
            Testplugin::class,
            Testplugin::$plugin
        );
    }

    /**
     *
     */
    public function testCraftEdition()
    {
        Craft::$app->setEdition(Craft::Pro);

        $this->assertSame(
            Craft::Pro,
            Craft::$app->getEdition()
        );
    }
}
