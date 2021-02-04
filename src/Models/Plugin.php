<?php

namespace Darkgoldblade01\Wordpress\Models;

/**
 * Class Model.
 */
class Plugin
{
    public $name;
    public $slug;
    public $version;
    public $author;
    public $author_profile;
    public $contributors;
    public $requires;
    public $tested;
    public $requires_php;
    public $rating;
    public $ratings;
    public $num_ratings;
    public $support_threads;
    public $support_threads_resolved;
    public $active_installs;
    public $last_updated;
    public $added;
    public $homepage;
    public $download_link;
    public $screenshots;
    public $tags;
    public $versions;
    public $donate_link;
    public $banners;

    /**
     * Fill the Model with
     * the data from the array.
     *
     * @param array $data
     *
     * @return Plugin
     */
    public function fill(array $data): Plugin
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

    /**
     * Up to Date.
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
        if (version_compare($this->version, $version, '>=')) {
            return true;
        } else {
            return false;
        }
    }
}
