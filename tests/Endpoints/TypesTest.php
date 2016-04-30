<?php
namespace Atog\PHPokemon\Endpoints;

use Atog\PHPokemon\EndpointTestTrait;

/**
 * Class PokemonTest
 * @package Atog\PHPokemon
 */
class TypesTest extends \PHPUnit_Framework_TestCase
{
    use EndpointTestTrait;
    
    public function setUp()
    {
        $this->setupEndpoint(Types::class);
    }

    public function testAll()
    {
        $this->helperTestAll();
    }

    public function testFind()
    {
        $this->helperTestFind(2, 'Types.schema.json');
    }
}
