<?php
namespace Atog\PHPokemon\Models;

use Atog\Api\Model;

/**
 * Class Pokedex
 * @package Atog\PHPokemon\Models
 */
class Pokedex extends Model
{
    /**
     * Save pokemon as collection
     * @param $pkmn
     */
    public function setPokemonAttribute($pkmn)
    {
        $this->attributes['pokemon'] = $this->makeCollection($pkmn);
    }
}
