<?php

/**
 * AppserverIo\Psr\Context\ArrayContext
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2015 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/context
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Psr\Context;

/**
 * The most basic context implementation.
 *
 * @author    Tim Wagner <tw@techdivision.com>
 * @copyright 2015 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-psr/context
 * @link      http://www.appserver.io
 */
class ArrayContext implements ContextInterface
{

    /**
     * Array that contains the attributes of this context.
     *
     * @var array
     */
    protected $attributes = array();

    /**
     * Adds the attribute with the passed name to this context.
     *
     * @param string $key   The key to add the value with
     * @param mixed  $value The value to add to the context
     *
     * @return void
     */
    public function setAttribute($key, $value)
    {
        $this->attributes[$key] = $value;
    }

    /**
     * Returns the value with the passed name from the context.
     *
     * @param string $key The key of the value to return from the context.
     *
     * @return mixed The requested attribute
     * @see \AppserverIo\Psr\Context\Context::getAttribute($key)
     */
    public function getAttribute($key)
    {
        if (array_key_exists($key, $this->attributes)) {
            return $this->attributes[$key];
        }
    }
}
