<?php
namespace Atog\PHPokemon\Endpoints;

use Atog\PHPokemon\EndpointTestTrait;

/**
 * Class EggGroupsTest
 * @package Atog\PHPokemon
 */
class EggGroupsTest extends \PHPUnit_Framework_TestCase
{
    use EndpointTestTrait;

    public function setUp()
    {
        $this->setupEndpoint(EggGroups::class);
    }

    public function testAll()
    {
        $this->helperTestAll();
    }

    public function testFind()
    {
        $this->helperTestFind(2, 'EggGroups.schema.json');
    }
}
