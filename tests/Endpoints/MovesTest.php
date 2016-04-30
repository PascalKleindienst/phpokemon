<?php
namespace Atog\PHPokemon\Endpoints;

use Atog\PHPokemon\EndpointTestTrait;

/**
 * Class MovesTest
 * @package Atog\PHPokemon
 */
class MovesTest extends \PHPUnit_Framework_TestCase
{
    use EndpointTestTrait;

    public function setUp()
    {
        $this->setupEndpoint(Moves::class);
    }

    public function testAll()
    {
        $this->helperTestAll();
    }

    public function testFind()
    {
        $this->helperTestFind(2, 'Moves.schema.json');
    }
}
