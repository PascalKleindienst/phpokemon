<?php
namespace Atog\PHPokemon\Endpoints;

use Atog\PHPokemon\EndpointTestTrait;

/**
 * Class GamesTest
 * @package Atog\PHPokemon\Endpoints
 */
class GamesTest extends \PHPUnit_Framework_TestCase
{
    use EndpointTestTrait;

    public function setUp()
    {
        $this->setupEndpoint(Games::class);
    }

    public function testAll()
    {
        $this->helperTestAll();
    }

    public function testFind()
    {
        $this->helperTestFind(2, 'Games.schema.json');
    }
}
