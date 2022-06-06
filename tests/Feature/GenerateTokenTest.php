<?php

namespace Njenga55\Agora\tests;

use Njenga55\Agora\AgoraProvider;
use Njenga55\Agora\Facades\Agora;
use Orchestra\Testbench\TestCase;

use function PHPUnit\Framework\assertStringStartsWith;

class GenerateTokenTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        config(['agora.access_key' => 'somekeyvalue']);
        config(['agora.secret_accessKey' => 'somekeyvalue']);
        config(['agora.lifespan' => 10000]);
    }

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
    public function testCanGenerateSdkToken()
    {
        $token = Agora::sdkToken();
        assertStringStartsWith('NETLESSSDK', $token);
    }

    /**
     * @return void
     */
    public function testCanGenerateRoomTokenToken()
    {
        $token = Agora::roomToken();
        assertStringStartsWith('NETLESSROOM_', $token);

        $token = Agora::setContext([
            'role' => 'ADMINROLE',
            'uuid' => 'some-uuid-value-here-especially-for-tasks-and-room'
        ])->roomToken();

        assertStringStartsWith('NETLESSROOM_', $token);
    }

    /**
     * @return void
     */
    public function testCanGenerateTaskTokenToken()
    {
        $token = Agora::taskToken();
        assertStringStartsWith('NETLESSTASK_', $token);

        $token = Agora::setContext([
            'role' => 'ADMINROLE',
            'uuid' => 'some-uuid-value-here-especially-for-tasks-and-room'
        ])->taskToken();

        assertStringStartsWith('NETLESSTASK_', $token);
    }
}
