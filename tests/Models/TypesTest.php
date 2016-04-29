<?php
namespace Atog\PHPokemon\Models;

use Illuminate\Support\Collection;

/**
 * Class TypesTest
 * @package Atog\PHPokemon\Models
 */
class TypesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Atog\PHPokemon\Models\Types
     */
    protected $model;

    /**
     * Setup
     */
    public function setUp()
    {
        $this->model = new Types();
    }

    /**
     * @dataProvider dataProvider
     * @param $data
     */
    public function testSetIneffectiveAttributeIsCollection($data)
    {
        $this->model->setIneffectiveAttribute($data);
        $this->assertInstanceOf(Collection::class, $this->model->ineffective);
    }

    /**
     * @dataProvider dataProvider
     * @depends testSetIneffectiveAttributeIsCollection
     * @param $data
     * @param $items
     */
    public function testSetIneffectiveCollectionItemsCount($data, $items)
    {
        $this->model->setIneffectiveAttribute($data);
        $this->assertCount($items, $this->model->ineffective);
    }

    /**
     * @dataProvider dataProvider
     * @param $data
     */
    public function testSetNoEffectAttributeIsCollection($data)
    {
        $this->model->setNoEffectAttribute($data);
        $this->assertInstanceOf(Collection::class, $this->model->no_effect);
    }

    /**
     * @dataProvider dataProvider
     * @depends testSetNoEffectAttributeIsCollection
     * @param $data
     * @param $items
     */
    public function testSetNoEffectCollectionItemsCount($data, $items)
    {
        $this->model->setNoEffectAttribute($data);
        $this->assertCount($items, $this->model->no_effect);
    }

    /**
     * @dataProvider dataProvider
     * @param $data
     */
    public function testSetResistanceAttributeIsCollection($data)
    {
        $this->model->setResistanceAttribute($data);
        $this->assertInstanceOf(Collection::class, $this->model->resistance);
    }

    /**
     * @dataProvider dataProvider
     * @depends testSetResistanceAttributeIsCollection
     * @param $data
     * @param $items
     */
    public function testSetResistanceCollectionItemsCount($data, $items)
    {
        $this->model->setResistanceAttribute($data);
        $this->assertCount($items, $this->model->resistance);
    }

    /**
     * @dataProvider dataProvider
     * @param $data
     */
    public function testSetSuperEffectiveAttributeIsCollection($data)
    {
        $this->model->setSuperEffectiveAttribute($data);
        $this->assertInstanceOf(Collection::class, $this->model->super_effective);
    }

    /**
     * @dataProvider dataProvider
     * @depends testSetSuperEffectiveAttributeIsCollection
     * @param $data
     * @param $items
     */
    public function testSetSuperEffectiveCollectionItemsCount($data, $items)
    {
        $this->model->setSuperEffectiveAttribute($data);
        $this->assertCount($items, $this->model->super_effective);
    }

    /**
     * @dataProvider dataProvider
     * @param $data
     */
    public function testSetWeaknessAttributeIsCollection($data)
    {
        $this->model->setWeaknessAttribute($data);
        $this->assertInstanceOf(Collection::class, $this->model->weakness);
    }

    /**
     * @dataProvider dataProvider
     * @depends testSetWeaknessAttributeIsCollection
     * @param $data
     * @param $items
     */
    public function testSetWeaknessCollectionItemsCount($data, $items)
    {
        $this->model->setWeaknessAttribute($data);
        $this->assertCount($items, $this->model->weakness);
    }

    public function dataProvider()
    {
        return [
            'non-empty' => [[['name' => 'A'], ['name' => 'B']], 2],
            'empty' => [[], 0],
        ];
    }
}
