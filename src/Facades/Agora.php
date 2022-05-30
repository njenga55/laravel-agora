<?php

namespace Njenga55\Agora\Facades;

use Illuminate\Support\Facades\Facade;
use Njenga55\Agora\AgoraProvider;

class Agora extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return AgoraProvider::class;
    }
}
