@extends('frontend.layouts.master')

@section('content')
    <h1 class="text-success">About us</h1>
    <h2>Welcome to the Picnic - we're here to help you maximise your marketing ROI!</h2>
    <p>Have you ever realised your marketing is a bit like a picnic? How do you know what to bring, what ingredients
        are going to complement each other? How are you going to keep everyone happy with what’s on offer? We
        understand that developing and implementing a successful marketing strategy isn't always as easy as it seems,
        that's why our solutions make it easier for you to achieve your goals. Whether you need support with your data
        or email marketing, we can help you create a Picnic basket that's full to the brim with strategies that will
        get you results.</p>
    <p>Starting as a team of 3 in 2015, we've flourished to become a team of over 35 avid Picnickers - with each member
        bringing something different and unique to the Picnic.
        Come and take a look at who we are and <a href="/meet-the-team">meet the Digital Picnic team!</a>
    </p>
    <div class="row">
        <div class="col-sm-3 col-xs-6 text-center">
            <h3 class="text-primary about-us-img-text">Marketing Lists</h3>
            <a href="{{ route('frontend.marketing-lists') }}"><img class="about-img-icon" src="/img/website/data.svg"></a>
        </div>
        <div class="col-sm-3 col-xs-6 text-center">
            <h3 class="text-yellow about-us-img-text">(CPE) Email Marketing</h3>
            <a href="{{ route('frontend.cpe-campaigns') }}"><img class="about-img-icon" src="/img/website/cpe.svg"></a>
        </div>
        <div class="col-sm-3 col-xs-6 text-center">
            <h3 class="text-turquoise about-us-img-text">Managed Email Campaigns</h3>
            <a href="{{ route('frontend.managed-email-campaigns') }}"><img class="about-img-icon" src="/img/website/campaigns.svg"></a>
        </div>
        <div class="col-sm-3 col-xs-6 text-center">
            <h3 class="text-danger about-us-img-text">Design</h3>
            <a href="{{ route('frontend.design') }}"><img class="about-img-icon" src="/img/website/designs.svg"></a>
        </div>
    </div>
@endsection

@section('after-scripts-end')

@stop