<?php
namespace Atog\PHPokemon\Models;

use Illuminate\Support\Collection;

/**
 * Class PokedexTest
 * @package Atog\PHPokemon\Models
 */
class PokedexTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Atog\PHPokemon\Models\Pokemon
     */
    protected $model;

    /**
     * Setup
     */
    public function setUp()
    {
        $this->model = new Pokedex();
    }

    /**
     * @dataProvider pkmn
     * @param $pkmn
     */
    public function testSetPokemonAttributeIsCollection($pkmn)
    {
        $this->model->setPokemonAttribute($pkmn);
        $this->assertInstanceOf(Collection::class, $this->model->pokemon);
    }

    /**
     * @dataProvider pkmn
     * @depends testSetPokemonAttributeIsCollection
     * @param $pkmn
     * @param $items
     */
    public function testSetPokemonCollectionItemsCount($pkmn, $items)
    {
        $this->model->setPokemonAttribute($pkmn);
        $this->assertCount($items, $this->model->pokemon);
    }

    public function pkmn()
    {
        return [
            'non-empty' => [[['name' => 'A'], ['name' => 'B']], 2],
            'empty' => [[], 0],
        ];
    }
}
