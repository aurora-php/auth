<?php

/*
 * This file is part of the 'octris/auth' package.
 *
 * (c) Harald Lapp <harald@octris.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Octris\Auth;

/**
 * Interface for building identity storage handlers.
 *
 * @copyright   copyright (c) 2011-2018 by Harald Lapp
 * @author      Harald Lapp <harald@octris.org>
 */
interface StorageInterface
{
    /**
     * Returns whether storage contains an identity or not.
     *
     * @return                                                  Returns true, if storage is empty.
     */
    public function isEmpty();

    /**
     * Store identity in storage.
     *
     * @param   \Octris\Auth\Identity  $identity       Identity to store in storage.
     */
    public function setIdentity(\Octris\Auth\Identity $identity);

    /**
     * Return identity from storage.
     *
     * @return  \Octris\Auth\Identity                  Identity stored in storage.
     */
    public function getIdentity();

    /**
     * Deletes identity from storage.
     */
    public function unsetIdentity();
    /**/
}
