<?php

namespace OguzcanDemircan\LaravelGuest;

use Auth;

class LaravelGuest
{       
    public function __construct()
    {
        $model = config('auth.providers.users.model');
        $this->user = new $model;
    }

    public function make()
    {   
        return Auth::check() 
        ? Auth::user() 
        : $this->user->find(config('laravelguest.guest.id'));
    }
}