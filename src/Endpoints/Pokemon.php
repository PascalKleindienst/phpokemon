<?php
namespace Atog\PHPokemon\Endpoints;

use Atog\PHPokemon\Endpoint;

/**
 * Class Pokemon
 * @package Atog\PHPokemon\Endpoints
 */
class Pokemon extends Endpoint
{
    /**
     * @var string
     */
    protected $endpoint = 'pokemon';

    /**
     * @param string|int $identifier id or name of the pokemon
     * @return \Atog\Api\Model|null
     */
    public function find($identifier)
    {
        return parent::find(strtolower($identifier));
    }
}
