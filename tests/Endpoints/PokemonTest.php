<?php
namespace Atog\PHPokemon\Endpoints;

use Atog\Api\Model;
use Atog\PHPokemon\EndpointTestTrait;
use EnricoStahn\JsonAssert\Assert as JsonAssert;

/**
 * Class PokemonTest
 * @package Atog\PHPokemon
 */
class PokemonTest extends \PHPUnit_Framework_TestCase
{
    use EndpointTestTrait, JsonAssert;

    /**
     * @var \Atog\PHPokemon\Endpoints\Pokemon
     */
    protected $endpoint;

    public function setUp()
    {
        $this->setupClient();
        $this->endpoint = new Pokemon($this->client, new Model());
    }

    public function testAll()
    {
        $response = $this->endpoint->all();
        $this->assertJsonMatchesSchema(__DIR__ . '/PokemonAll.schema.json', json_decode($response->toJson()));
    }

    public function testFindByName()
    {
        $response = $this->endpoint->find('Bulbasaur');
        $this->assertJsonMatchesSchema(__DIR__ . '/Pokemon.schema.json', json_decode($response->toJson()));
    }

    public function testFindByNumber()
    {
        $response = $this->endpoint->find(42);
        $this->assertJsonMatchesSchema(__DIR__ . '/Pokemon.schema.json', json_decode($response->toJson()));
    }
}
