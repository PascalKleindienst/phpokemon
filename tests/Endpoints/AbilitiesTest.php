<?php
namespace Atog\PHPokemon\Endpoints;

use Atog\PHPokemon\EndpointTestTrait;

/**
 * Class AbilitiesTest
 * @package Atog\PHPokemon
 */
class AbilitiesTest extends \PHPUnit_Framework_TestCase
{
    use EndpointTestTrait;

    public function setUp()
    {
        $this->setupEndpoint(Abilities::class);
    }

    public function testAll()
    {
        $this->helperTestAll();
    }

    public function testFind()
    {
        $this->helperTestFind(2, 'Abilities.schema.json');
    }
}
