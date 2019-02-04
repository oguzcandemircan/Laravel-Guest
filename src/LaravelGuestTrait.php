<?php

namespace OguzcanDemircan\LaravelGuest;

use Auth;

/**
 * 
 */
trait LaravelGuestTrait
{   
    /**
     * Check user is guest
     *
     * @return boolean
     */
    public function isGuest()
    {
        return Auth::guest();
    }

    /**
     * Check user is member
     *
     * @return boolean
     */
    public function isMember()
    {
        return  ! $this->isGuest();
    }
}