<?php
namespace Atog\PHPokemon;

/**
 * Class ClientTest
 * @package Atog\PHPokemon
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Atog\PHPokemon\Client
     */
    protected $client;

    public function setUp()
    {
        $this->client = new Client();
    }

    /**
     * @dataProvider endpoints
     * @param $key
     * @param $expected
     * @throws \Atog\Api\Exceptions\InvalidEndpointException
     */
    public function testDefaultEndpoints($key, $expected)
    {
        $this->assertInstanceOf($expected, $this->client->getEndpoint($key));
    }

    public function testDefaultModels()
    {
        $models = [
            'Pokedex'      => Models\Pokedex::class,
            'Pokemon'      => Models\Pokemon::class,
            'Types'        => Models\Types::class,
            'Moves'        => Models\Moves::class,
            'Abilities'    => Models\Abilities::class,
            'EggGroups'    => Models\EggGroups::class,
            'Descriptions' => Models\Descriptions::class,
            'Sprites'      => Models\Sprites::class,
            'Games'        => Models\Games::class
        ];
        $config = $this->client->getConfig();
        $this->assertEquals($models, $config['models']);
    }
    
    public function endpoints()
    {
        return [
            ['pokedex', Endpoints\Pokedex::class],
            ['pokemon', Endpoints\Pokemon::class],
            ['types', Endpoints\Types::class],
            ['moves', Endpoints\Moves::class],
            ['abilities', Endpoints\Abilities::class],
            ['eggGroups', Endpoints\EggGroups::class],
            ['descriptions', Endpoints\Descriptions::class],
            ['sprites', Endpoints\Sprites::class],
            ['games', Endpoints\Games::class]
        ];
    }
}
