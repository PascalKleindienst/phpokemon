<?php
namespace Atog\PHPokemon;

use Atog\Api\Client as AbstractClient;
use Atog\PHPokemon\Endpoints;
use \Atog\PHPokemon\Models;

/**
 * Class Client
 * @property-read \Atog\PHPokemon\Endpoints\Pokedex pokedex
 * @property-read \Atog\PHPokemon\Endpoints\Pokemon pokemon
 * @property-read \Atog\PHPokemon\Endpoints\Types types
 * @property-read \Atog\PHPokemon\Endpoints\Moves moves
 * @property-read \Atog\PHPokemon\Endpoints\Abilities abilities
 * @property-read \Atog\PHPokemon\Endpoints\EggGroups eggGroups
 * @property-read \Atog\PHPokemon\Endpoints\Descriptions descriptions
 * @property-read \Atog\PHPokemon\Endpoints\Sprites sprites
 * @property-read \Atog\PHPokemon\Endpoints\Games games
 * @package Atog\PHPokemon
 */
class Client extends AbstractClient
{
    /**
     * @var $abilities
     */

    /**
     * @var string
     */
    protected $domain = 'http://pokeapi.co/api/v1';

    /**
     * Client constructor.
     * @param array $endpoints
     * @param array $config
     */
    public function __construct(array $endpoints = [], array $config = [])
    {
        $defaultEndpoints = [
            Endpoints\Pokedex::class,
            Endpoints\Pokemon::class,
            Endpoints\Types::class,
            Endpoints\Moves::class,
            Endpoints\Abilities::class,
            Endpoints\EggGroups::class,
            Endpoints\Descriptions::class,
            Endpoints\Sprites::class,
            Endpoints\Games::class
        ];
        $models = [
            'Pokedex'      => Models\Pokedex::class,
            'Pokemon'      => Models\Pokemon::class,
            'Types'        => Models\Types::class,
            'Moves'        => Models\Moves::class,
            'Abilities'    => Models\Abilities::class,
            'EggGroups'    => Models\EggGroups::class,
            'Descriptions' => Models\Descriptions::class,
            'Sprites'      => Models\Sprites::class,
            'Games'        => Models\Games::class
        ];

        $config['models'] = $models;
        parent::__construct(array_merge($defaultEndpoints, $endpoints), $config);
    }
}
