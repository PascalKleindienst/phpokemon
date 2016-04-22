<?php
namespace Atog\PHPokemon\Endpoints;

use Atog\Api\Model;
use EnricoStahn\JsonAssert\Assert as JsonAssert;

/**
 * Class PokedexTest
 * @package Atog\PHPokemon
 */
class PokedexTest extends \PHPUnit_Framework_TestCase
{
    use EndpointTestTrait, JsonAssert;

    /**
     * @var \Atog\PHPokemon\Endpoints\Pokedex
     */
    protected $endpoint;

    public function setUp()
    {
        $this->endpoint = new Pokedex($this->setupClient(Pokedex::class), new Model());
    }

    public function testGet()
    {
        $response = $this->endpoint->get();
        $this->assertJsonMatchesSchema(__DIR__ . '/Pokedex.schema.json', json_decode($response->toJson()));
    }
}
