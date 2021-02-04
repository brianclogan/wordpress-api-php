<?php

namespace Darkgoldblade01\Wordpress\Models;

/**
 * Class Model.
 */
class Model
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
        foreach ($data as $key => $value) {
            if ($key === 'url') {
                continue;
            }
            $this->{$key} = $value;
        }

        return $this;
    }

    /**
     * Convert the Model to an array.
     *
     * @return array
     */
    public function toArray(): array
    {
        return (array) $this;
    }
}
