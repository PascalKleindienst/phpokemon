<?php
namespace Atog\PHPokemon;

/**
 * Class Endpoint
 * @package Atog\PHPokemon
 */
class Endpoint extends \Atog\Api\Endpoint
{
    /**
     * Get all entries paginated
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
     * Get an entry by an identifier
     * @param mixed $identifier id of the type
     * @return \Atog\Api\Model|null
     */
    public function find($identifier)
    {
        return $this->respond(
            $this->client->get($this->getEndpointUrl($identifier, true))
        );
    }
}
