<?php
namespace Atog\PHPokemon;

use Atog\Api\Model;
use Atog\Api\Client;
use Atog\PHPokemon\Endpoints\Pokedex;
use Atog\PHPokemon\Endpoints\Pokemon;
use ReflectionClass;
use PHPUnit_Framework_MockObject_MockObject as MockObject;

trait EndpointTestTrait
{
    /**
     * @var \Atog\PHPokemon\Client
     */
    protected $client;

    public function setupClient($options = [])
    {
        $options = array_merge(['curl' => [CURLOPT_TIMEOUT => 500, CURLOPT_FOLLOWLOCATION => false]], $options);
        $endpoints = [Pokedex::class, Pokemon::class];
        $client = $this->getMockForAbstractClass(Client::class, [$endpoints, $options]);
        $reflection = new ReflectionClass(Client::class);
        $this->setObjectAttribute($client, $reflection, 'domain', 'http://pokeapi.co/api/v1');
        $this->client = $client;
    }
    
    protected function setObjectAttribute(MockObject $mock, ReflectionClass $reflection, $property, $value)
    {
        $reflectionProperty = $reflection->getProperty($property);
        $reflectionProperty->setAccessible(true);
        $reflectionProperty->setValue($mock, $value);
    }
}
