<?php
namespace Atog\PHPokemon;

use Atog\Api\Model;
use Atog\Api\Client;
use ReflectionClass;
use PHPUnit_Framework_MockObject_MockObject as MockObject;

trait EndpointTestTrait
{

    public function setupClient($endpoints = [], $options = [])
    {
        if (!is_array($endpoints)) {
            $endpoints = [$endpoints];
        }

        $client = $this->getMockForAbstractClass(Client::class, [$endpoints, $options]);
        $reflection = new ReflectionClass(Client::class);
        $this->setObjectAttribute($client, $reflection, 'domain', 'http://pokeapi.co/api/v1');
        return $client;
    }
    
    protected function setObjectAttribute(MockObject $mock, ReflectionClass $reflection, $property, $value)
    {
        $reflectionProperty = $reflection->getProperty($property);
        $reflectionProperty->setAccessible(true);
        $reflectionProperty->setValue($mock, $value);
    }
}
