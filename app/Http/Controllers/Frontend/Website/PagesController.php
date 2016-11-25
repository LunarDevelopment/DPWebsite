<?php

namespace App\Http\Controllers\Frontend\Website;

use App\Http\Controllers\Controller;
use App\Repositories\Frontend\Website\SocialRepository;
use App\Posts;

class PagesController extends Controller
{
    public function show($name, Posts $posts, SocialRepository $socialRepository)
    {
        $content = $posts->where('guid', $name)->first();
        $socials = $socialRepository->getAll();
        return view('frontend.content', [
            'content' => $content,
            'socials' => $socials
        ]);
    }

    public function index(SocialRepository $socialRepository)
    {
        $socials = $socialRepository->getAll();
        return view('frontend.index', ['socials' => $socials]);
    }

    public function marketingLists()
    {
        return view('frontend.marketing-lists');
    }

    public function managedEmailCampaigns()
    {
        return view('frontend.managed-email-campaigns');
    }

    public function design()
    {
        return view('frontend.design');
    }

    public function cpeCampaigns()
    {
        return view('frontend.cpe-campaigns');
    }
}