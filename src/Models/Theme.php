<?php

namespace Darkgoldblade01\Wordpress\Models;

/**
 * Class Model
 * @package Darkgoldblade01\WordpressApi\Models
 */
class Theme
{

    /**
     * Fill the Model with
     * the data from the array.
     *
     * @param array $data
     *
     * @return Model
     */
    public function fill(array $data): Model
    {
        foreach($data AS $key => $value) {
            if($key === 'url') {
                continue;
            }
            $this->{$key} = $value;
        }
        return $this;
    }

    /**
     * Convert the Model to an array
     *
     * @return array
     */
    public function toArray(): array
    {
        return (array) $this;
    }

    /**
     * Up to Date
     *
     * Checks the version of the current plugin vs. the
     * version supplied and returns true or false.
     *
     * If the plugin is greater than or equal to the current version,
     * return true, else return false.
     *
     * @param $version
     * @return bool
     */
    public function upToDate($version): bool
    {
        if(version_compare($this->version, $version, '>=')) {
            return true;
        } else {
            return false;
        }
    }

}
