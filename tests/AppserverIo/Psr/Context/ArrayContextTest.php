<?php

/**
 * AppserverIo\Psr\Context\ArrayContextTest
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   Appserver
 * @package    Psr
 * @subpackage Context
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io-psr/context
 * @link       http://www.appserver.io
 */

namespace AppserverIo\Psr\Context;

/**
 * Test for the array based context implementation.
 *
 * @category   Appserver
 * @package    Psr
 * @subpackage Context
 * @author     Tim Wagner <tw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io-psr/context
 * @link       http://www.appserver.io
 */
class ArrayContextTest extends \PHPUnit_Framework_TestCase
{

    /**
     * The servlet module instance to test.
     *
     * @var \AppserverIo\Psr\Context\ArrayContext
     */
    protected $context;

    /**
     * Initializes the base context to test.
     *
     * @return void
     */
    public function setUp()
    {
        $this->context = new ArrayContext();
    }

    /**
     * Test context attribute setter and getter.
     *
     * @return void
     */
    public function testSetAndGetAttribute()
    {
        $this->context->setAttribute($key = 'key', $value = 'Test');
        $this->assertSame($value, $this->context->getAttribute($key));
    }
}
