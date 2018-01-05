<?php

/*
 * This file is part of the 'octris/auth' package.
 *
 * (c) Harald Lapp <harald@octris.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Octris\Auth\Storage;

/**
 * Non persistent storage of identity. This is the default authentication
 * storage handler.
 *
 * @copyright   copyright (c) 2011-2018 by Harald Lapp
 * @author      Harald Lapp <harald@octris.org>
 */
class Transient implements \Octris\Auth\IStorage
{
    /**
     * Transient identity storage.
     *
     * @type    array|null
     */
    protected $identity = null;

    /**
     * Constructor.
     */
    public function __construct()
    {
    }

    /**
     * Returns whether storage contains an identity or not.
     *
     * @return                                                  Returns true, if storage is empty.
     */
    public function isEmpty()
    {
        return (empty($this->identity));
    }

    /**
     * Store identity in storage.
     *
     * @param   \Octris\Auth\Identity  $identity       Identity to store in storage.
     */
    public function setIdentity(\Octris\Auth\Identity $identity)
    {
        $this->identity = $identity;
    }

    /**
     * Return identity from storage.
     *
     * @return  \Octris\Auth\Identity                  Identity stored in storage.
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Deletes identity from storage.
     */
    public function unsetIdentity()
    {
        $this->identity = null;
    }
}
