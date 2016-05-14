<?php
namespace Atog\PHPokemon\Endpoints;

use Atog\PHPokemon\EndpointTestTrait;

/**
 * Class PokedexTest
 * @package Atog\PHPokemon\Endpoints
 */
class PokedexTest extends \PHPUnit_Framework_TestCase
{
    use EndpointTestTrait;

    public function setUp()
    {
        $this->setupEndpoint(Pokedex::class);
    }

    public function testGet()
    {
        $response = $this->endpoint->get();
        $this->assertJsonMatchesSchema(__DIR__ . '/Pokedex.schema.json', json_decode($response->toJson()));
    }
}
