<?php
namespace Atog\PHPokemon\Models;

use Atog\Api\Model;

/**
 * Class Types
 * @package Atog\PHPokemon\Models
 */
class Types extends Model
{
    /**
     * Save ineffective as collection
     * @param $value
     */
    public function setIneffectiveAttribute($value)
    {
        $this->attributes['ineffective'] = $this->makeCollection($value);
    }

    /**
     * Save no_effect as collection
     * @param $value
     */
    public function setNoEffectAttribute($value)
    {
        $this->attributes['no_effect'] = $this->makeCollection($value);
    }

    /**
     * Save resistance as collection
     * @param $value
     */
    public function setResistanceAttribute($value)
    {
        $this->attributes['resistance'] = $this->makeCollection($value);
    }

    /**
     * Save super_effective as collection
     * @param $value
     */
    public function setSuperEffectiveAttribute($value)
    {
        $this->attributes['super_effective'] = $this->makeCollection($value);
    }

    /**
     * Save weakness as collection
     * @param $value
     */
    public function setWeaknessAttribute($value)
    {
        $this->attributes['weakness'] = $this->makeCollection($value);
    }
}
