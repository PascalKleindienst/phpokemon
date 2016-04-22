<?php
namespace Atog\PHPokemon\Endpoints;

use Atog\Api\Endpoint;

/**
 * Class Pokedex
 * @package Atog\PHPokemon\Endpoints
 */
class Pokedex extends Endpoint
{
    /**
     * @var string
     */
    protected $endpoint = 'pokedex';

    /**
     * @return \Atog\Api\Model|null
     */
    public function get()
    {
        return $this->respond(
            $this->client->get($this->getEndpointUrl(1, true))
        );
    }
}
