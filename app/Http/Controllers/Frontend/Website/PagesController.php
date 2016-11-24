<?php

namespace App\Http\Controllers\Frontend\Website;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about-us');
    }

    public function products()
    {
        return view('frontend.products');
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

    public function privacyPolicy()
    {
        return view('frontend.privacy-policy');
    }

    public function frequentlyAskedQuestions()
    {
        return view('frontend.faq');
    }
}