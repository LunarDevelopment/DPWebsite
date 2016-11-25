<?php

namespace App\Repositories\Frontend\Website;

interface SocialRepositoryInterface
{

    /**
     * Receives a string specifying a social outlet. and returns an Social URL.
     *
     * @param $string
     * @return string
     */
    public function getURL($string);

    /**
     * Method returns all of the social media links.
     *
     * @return object
     */
    public function getAll();

}