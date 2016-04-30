<?php
namespace Atog\PHPokemon;

use EnricoStahn\JsonAssert\Assert as JsonAssert;
use Atog\Api\Exceptions\InvalidEndpointException;
use Atog\Api\Model;
use Atog\Api\Client;
use Atog\PHPokemon\Endpoints\Pokedex;
use Atog\PHPokemon\Endpoints\Pokemon;
use ReflectionClass;
use PHPUnit_Framework_MockObject_MockObject as MockObject;

/**
 * Class EndpointTestTrait
 * @package Atog\PHPokemon
 */
trait EndpointTestTrait
{
    use JsonAssert;

    /**
     * @var \Atog\PHPokemon\Client
     */
    protected $client;

    /**
     * @var \Atog\PHPokemon\Endpoint
     */
    protected $endpoint;

    /**
     * @param $endpointClass
     * @throws \Atog\Api\Exceptions\InvalidEndpointException
     */
    protected function setupEndpoint($endpointClass)
    {
        if (!class_exists($endpointClass)) {
            throw new InvalidEndpointException('Endpoint with name ' . $endpointClass . ' does not exist');
        }

        $this->setupClient();
        $this->endpoint = new $endpointClass($this->client, new Model());
    }

    /**
     * Test all
     */
    public function helperTestAll()
    {
        $response = $this->endpoint->all();
        $this->assertJsonMatchesSchema(__DIR__ . '/Endpoints/_paginated.schema.json', json_decode($response->toJson()));
    }

    /**
     * Helper for find tests
     * @param string|int $identifier
     * @param string     $schema
     */
    public function helperTestFind($identifier, $schema)
    {
        $response = $this->endpoint->find($identifier);
        $this->assertJsonMatchesSchema(__DIR__ . '/Endpoints/' . $schema, json_decode($response->toJson()));
    }

    /**
     * @param array $options
     */
    protected function setupClient($options = [])
    {
        $options = array_merge(['curl' => [CURLOPT_TIMEOUT => 900, CURLOPT_FOLLOWLOCATION => false]], $options);
        $endpoints = [Pokedex::class, Pokemon::class];
        $client = $this->getMockForAbstractClass(Client::class, [$endpoints, $options]);
        $reflection = new ReflectionClass(Client::class);
        $this->setObjectAttribute($client, $reflection, 'domain', 'http://pokeapi.co/api/v1');
        $this->client = $client;
    }

    /**
     * @param \PHPUnit_Framework_MockObject_MockObject $mock
     * @param \ReflectionClass                         $reflection
     * @param                                          $property
     * @param                                          $value
     */
    protected function setObjectAttribute(MockObject $mock, ReflectionClass $reflection, $property, $value)
    {
        $reflectionProperty = $reflection->getProperty($property);
        $reflectionProperty->setAccessible(true);
        $reflectionProperty->setValue($mock, $value);
    }
}
