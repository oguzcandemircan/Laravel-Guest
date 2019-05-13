<?php

if(! function_exists('user')) {
    function user() {
        return resolve('laravelguest')->make();
    }
}

if(! function_exists('is_guest')) {
    function is_guest() {
        return user()->isGuest();
    }
}

if(! function_exists('is_member')) {
    function is_member() {
        return user()->isGuest();
    }
}

if(! function_exists('user_id')) {
    function user_id() {
    	return is_member() ? user()->id : 0 ;
	}
}