<?php

namespace App\Http\Controllers\Frontend\Website;

use App\Http\Controllers\Controller;
use Sitemap;

class SiteMapController extends Controller
{
    public function __construct()
    {
        \Debugbar::disable();
    }

    public function index()
    {
        return view('frontend.sitemap');
    }

    public function scan()
    {
        // Get a general sitemap.
        Sitemap::addSitemap('/sitemaps/general');

        // You can use the route helpers too.
        Sitemap::addSitemap(URL::route('sitemaps.posts'));
        Sitemap::addSitemap(route('sitemaps.users'));

        // Return the sitemap to the client.
        return Sitemap::index();
    }
}