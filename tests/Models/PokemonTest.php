<?php
namespace Atog\PHPokemon\Models;

use Illuminate\Support\Collection;

/**
 * Class PokemonTest
 * @package Atog\PHPokemon\Models
 */
class PokemonTest extends \PHPUnit_Framework_TestCase
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
        $this->model = new Pokemon();
    }

    /**
     * @dataProvider dataProvider
     * @param $data
     */
    public function testSetAbilitiesAttributeIsCollection($data)
    {
        $this->model->setAbilitiesAttribute($data);
        $this->assertInstanceOf(Collection::class, $this->model->abilities);
    }

    /**
     * @dataProvider dataProvider
     * @depends testSetAbilitiesAttributeIsCollection
     * @param $data
     * @param $items
     */
    public function testSetAbilitiesCollectionItemsCount($data, $items)
    {
        $this->model->setAbilitiesAttribute($data);
        $this->assertCount($items, $this->model->abilities);
    }

    /**
     * @dataProvider dataProvider
     * @param $data
     */
    public function testSetEggGroupsAttributeIsCollection($data)
    {
        $this->model->setEggGroupsAttribute($data);
        $this->assertInstanceOf(Collection::class, $this->model->egg_groups);
    }

    /**
     * @dataProvider dataProvider
     * @depends testSetEggGroupsAttributeIsCollection
     * @param $data
     * @param $items
     */
    public function testSetEggGroupsCollectionItemsCount($data, $items)
    {
        $this->model->setEggGroupsAttribute($data);
        $this->assertCount($items, $this->model->egg_groups);
    }

    /**
     * @dataProvider dataProvider
     * @param $data
     */
    public function testSetEvolutionsAttributeIsCollection($data)
    {
        $this->model->setEvolutionsAttribute($data);
        $this->assertInstanceOf(Collection::class, $this->model->evolutions);
    }

    /**
     * @dataProvider dataProvider
     * @depends testSetEvolutionsAttributeIsCollection
     * @param $data
     * @param $items
     */
    public function testSetEvolutionsCollectionItemsCount($data, $items)
    {
        $this->model->setEvolutionsAttribute($data);
        $this->assertCount($items, $this->model->evolutions);
    }

    /**
     * @dataProvider dataProvider
     * @param $data
     */
    public function testSetDescriptionsAttributeIsCollection($data)
    {
        $this->model->setDescriptionsAttribute($data);
        $this->assertInstanceOf(Collection::class, $this->model->descriptions);
    }

    /**
     * @dataProvider dataProvider
     * @depends testSetDescriptionsAttributeIsCollection
     * @param $data
     * @param $items
     */
    public function testSetDescriptionsCollectionItemsCount($data, $items)
    {
        $this->model->setDescriptionsAttribute($data);
        $this->assertCount($items, $this->model->descriptions);
    }

    /**
     * @dataProvider dataProvider
     * @param $data
     */
    public function testSetMovesAttributeIsCollection($data)
    {
        $this->model->setMovesAttribute($data);
        $this->assertInstanceOf(Collection::class, $this->model->moves);
    }

    /**
     * @dataProvider dataProvider
     * @depends testSetMovesAttributeIsCollection
     * @param $data
     * @param $items
     */
    public function testSetMovesCollectionItemsCount($data, $items)
    {
        $this->model->setMovesAttribute($data);
        $this->assertCount($items, $this->model->moves);
    }

    /**
     * @dataProvider dataProvider
     * @param $data
     */
    public function testSetTypesAttributeIsCollection($data)
    {
        $this->model->setTypesAttribute($data);
        $this->assertInstanceOf(Collection::class, $this->model->types);
    }

    /**
     * @dataProvider dataProvider
     * @depends testSetTypesAttributeIsCollection
     * @param $data
     * @param $items
     */
    public function testSetTypesCollectionItemsCount($data, $items)
    {
        $this->model->setTypesAttribute($data);
        $this->assertCount($items, $this->model->types);
    }

    /**
     * @dataProvider dataProvider
     * @param $data
     */
    public function testSetSpritesAttributeIsCollection($data)
    {
        $this->model->setSpritesAttribute($data);
        $this->assertInstanceOf(Collection::class, $this->model->sprites);
    }

    /**
     * @dataProvider dataProvider
     * @depends testSetSpritesAttributeIsCollection
     * @param $data
     * @param $items
     */
    public function testSetSpritesCollectionItemsCount($data, $items)
    {
        $this->model->setSpritesAttribute($data);
        $this->assertCount($items, $this->model->sprites);
    }

    public function dataProvider()
    {
        return [
            'non-empty' => [[['name' => 'A'], ['name' => 'B']], 2],
            'empty' => [[], 0],
        ];
    }
}
