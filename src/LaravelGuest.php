<?php

namespace OguzcanDemircan\LaravelGuest;

class LaravelGuest
{
    public function make()
    {   
        return auth()->check() ? auth()->user() : \App\User::find(config('laravelguest.guest.id'));
    }
}