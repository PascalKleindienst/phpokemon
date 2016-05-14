<?php
namespace Atog\PHPokemon\Endpoints;

use Atog\PHPokemon\EndpointTestTrait;

/**
 * Class PokemonTest
 * @package Atog\PHPokemon\Endpoints
 */
class PokemonTest extends \PHPUnit_Framework_TestCase
{
    use EndpointTestTrait;

    public function setUp()
    {
        $this->setupEndpoint(Pokemon::class);
    }

    public function testAll()
    {
        $this->helperTestAll();
    }

    public function testFindByName()
    {
        $this->helperTestFind('Bulbasaur', 'Pokemon.schema.json');
    }

    public function testFindByNumber()
    {
        $this->helperTestFind(42, 'Pokemon.schema.json');
    }
}
