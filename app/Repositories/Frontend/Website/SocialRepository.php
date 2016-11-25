<?php

namespace App\Repositories\Frontend\Website;

use Mockery\CountValidator\Exception;
use App\Socials;

class SocialRepository implements SocialRepositoryInterface
{

    public $socials;

    public function __construct()
    {
        $this->socials = new Socials;
    }

    /*
     * TODO: Test logic, return string
     */
    public function getURL($string)
    {
        $social_array = $this->socials->where('', $string)->get();
        if (!array_key_exists($string, $this->social_links))
        {
            throw new Exception('Social URL not found for' . $string);
        }
        return 'string';
    }

    public function getAll()
    {
        $social_array = $this->socials->get();
        $result = $social_array->keyBy('name');
        return $result;
    }

}