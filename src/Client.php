<?php
namespace Atog\PHPokemon;

use Atog\Api\Client as AbstractClient;
use Atog\PHPokemon\Endpoints;
use \Atog\PHPokemon\Models;

/**
 * Class Client
 * @package Atog\PHPokemon
 */
class Client extends AbstractClient
{
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
        ];
        $models = [
            'Pokedex' => Models\Pokedex::class,
            'Pokemon' => Models\Pokemon::class,
            'Types'   => Models\Types::class,
            'Moves'   => Models\Moves::class,
        ];

        $config['models'] = $models;
        parent::__construct(array_merge($defaultEndpoints, $endpoints), $config);
    }
}
