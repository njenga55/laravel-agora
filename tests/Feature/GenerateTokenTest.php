<?php

namespace Njenga55\Agora\tests;

use Njenga55\Agora\AgoraProvider;
use Njenga55\Agora\Facades\Agora;
use Orchestra\Testbench\TestCase;

class GenerateTokenTest extends TestCase
{
    /**
     * @param $app
     *
     * @return void
     */
    public function getPackageAliases($app)
    {
        return [
            'Agora' => AgoraProvider::class
        ];
    }

    /**
     * @return void
     */
    public function testCanGenerateToken()
    {
        $token = Agora::sdkToken();
        // dd(new ());

        dd($token);
    }
}
