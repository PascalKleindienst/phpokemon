<?php
namespace Atog\PHPokemon\Endpoints;

use Atog\Api\Endpoint;

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
     * @param int $limit
     * @param int $offset
     * @return \Atog\Api\Model|null
     */
    public function all($limit = 1, $offset = 0)
    {
        return $this->respond(
            $this->client->get($this->getEndpointUrl(null, false), ['limit' => $limit, 'offset' => $offset])
        );
    }

    /**
     * @param string|int $identifier id or name of the pokemon
     * @return \Atog\Api\Model|null
     */
    public function find($identifier)
    {
        return $this->respond(
            $this->client->get($this->getEndpointUrl(strtolower($identifier), true))
        );
    }
}
