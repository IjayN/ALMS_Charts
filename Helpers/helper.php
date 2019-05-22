<?php

if (!function_exists('avatarUploads')) {
    function avatarUploads()
    {
        return '/uploads/';
    }

}

if (!function_exists('avatarResized')) {
    function avatarResized()
    {
        return '/uploads/avatar/';
    }

}


if (!function_exists('appUrl')) {
    function appUrl()
    {
        return config('app.url');
    }

}