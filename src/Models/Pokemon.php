<?php
namespace Atog\PHPokemon\Models;

use Atog\Api\Model;

/**
 * Class Pokemon
 * @package Atog\PHPokemon\Models
 */
class Pokemon extends Model
{
    /**
     * Save abilities as collection
     * @param $values
     */
    public function setAbilitiesAttribute($values)
    {
        $this->attributes['abilities'] = $this->makeCollection($values);
    }

    /**
     * Save egg_groups as collection
     * @param $values
     */
    public function setEggGroupsAttribute($values)
    {
        $this->attributes['egg_groups'] = $this->makeCollection($values);
    }

    /**
     * Save evolutions as collection
     * @param $values
     */
    public function setEvolutionsAttribute($values)
    {
        $this->attributes['evolutions'] = $this->makeCollection($values);
    }

    /**
     * Save descriptions as collection
     * @param $values
     */
    public function setDescriptionsAttribute($values)
    {
        $this->attributes['descriptions'] = $this->makeCollection($values);
    }

    /**
     * Save moves as collection
     * @param $values
     */
    public function setMovesAttribute($values)
    {
        $this->attributes['moves'] = $this->makeCollection($values);
    }
    
    /**
     * Save types as collection
     * @param $values
     */
    public function setTypesAttribute($values)
    {
        $this->attributes['types'] = $this->makeCollection($values);
    }
    
    /**
     * Save sprites as collection
     * @param $values
     */
    public function setSpritesAttribute($values)
    {
        $this->attributes['sprites'] = $this->makeCollection($values);
    }
}
