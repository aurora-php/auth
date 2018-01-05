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
 * Storage handler for storing identity into session.
 *
 * @copyright   copyright (c) 2011-2018 by Harald Lapp
 * @author      Harald Lapp <harald@octris.org>
 */
class Session implements \Octris\Auth\IStorage
{
    /**
     * Instance of session class.
     *
     * @type    \Octris\Core\App\Web\Session
     */
    protected $session;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->session = \Octris\Core\App\Web\Session::getInstance();
    }

    /**
     * Returns whether storage contains an identity or not.
     *
     * @return                                                  Returns true, if storage is empty.
     */
    public function isEmpty()
    {
        return (!$this->session->isExist('identity', __CLASS__));
    }

    /**
     * Store identity in storage.
     *
     * @param   \Octris\Auth\Identity  $identity       Identity to store in storage.
     */
    public function setIdentity(\Octris\Auth\Identity $identity)
    {
        $this->session->setValue('identity', base64_encode(serialize($identity)), __CLASS__);
    }

    /**
     * Return identity from storage.
     *
     * @return  \Octris\Auth\Identity                  Identity stored in storage.
     */
    public function getIdentity()
    {
        return unserialize(base64_decode($this->session->getValue('identity', __CLASS__)));
    }

    /**
     * Deletes identity from storage.
     */
    public function unsetIdentity()
    {
        $this->session->unsetValue('identity', __CLASS__);
    }
}
