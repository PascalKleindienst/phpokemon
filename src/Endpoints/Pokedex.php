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
     * @return \Atog\Api\Model|string
     */
    public function get()
    {
        $response = $this->client->get($this->getEndpointUrl(1, true));

        // return new model instance with fetched content if response is okay
        if ($response->isOk()) {
            return $this->model->newInstance($response->getContent());
        }

        return $response->getContent();
    }
}
