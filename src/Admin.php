<?php

namespace TMS\Admin;

class Admin
{
    public function __construct()
    {
    }

    // Build wonderful things
    public function example()
    {
        return 'example output and version is: '.config('admin.version');
    }

    public function echoPhrase(string $phrase): string
    {
        return $phrase;
    }
}
