<?php
namespace Atog\PHPokemon\Endpoints;

use Atog\Api\Model;
use Atog\PHPokemon\EndpointTestTrait;
use EnricoStahn\JsonAssert\Assert as JsonAssert;

/**
 * Class MovesTest
 * @package Atog\PHPokemon
 */
class MovesTest extends \PHPUnit_Framework_TestCase
{
    use EndpointTestTrait, JsonAssert;

    /**
     * @var \Atog\PHPokemon\Endpoints\Moves
     */
    protected $endpoint;

    public function setUp()
    {
        $this->setupClient();
        $this->endpoint = new Moves($this->client, new Model());
    }

    public function testAll()
    {
        $response = $this->endpoint->all();
        $this->assertJsonMatchesSchema(__DIR__ . '/_paginated.schema.json', json_decode($response->toJson()));
    }

    public function testFind()
    {
        $response = $this->endpoint->find(2);
        $this->assertJsonMatchesSchema(__DIR__ . '/Moves.schema.json', json_decode($response->toJson()));
    }
}
