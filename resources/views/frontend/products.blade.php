@extends('frontend.layouts.master')

@section('content')
    <h1 class="text-success">Products</h1>
    <p>We understand that developing and implementing a successful marketing strategy
        isn't always as easy as it seems, that's why our solutions make it easier for you to
        achieve your goals.</p>
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-primary products-panel text-center">
                <img class="products-panel-icon" src="\img\website\data.svg">
                <h2>Marketing Lists</h2>
                <p>Our marketing lists offer you the opportunity to reach senior decision makers in a range of
                    industries within the UK – giving you the opportunity to generate new business and increase…</p>
                <a class="btn btn-primary btn-lg" href="{{ route('frontend.marketing-lists') }}">More info</a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-turquoise products-panel text-center">
                <img class="products-panel-icon" src="\img\website\campaigns.svg">
                <h2>Managed Email Campaigns</h2>
                <p>So you’ve sorted your contacts and are ready to get in touch, but how do you do it? Whether you're an email marketing veteran or...
                </p>
                <a class="btn btn-turquoise btn-lg" href="{{ route('frontend.managed-email-campaigns') }}">More info</a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-danger products-panel text-center">
                <img class="products-panel-icon" src="\img\website\designs.svg">
                <h2>Design</h2>
                <p>Being able to create your designs in a drag and drop editor might be easy to do, but how do you know
                    the email will get into the inbox? Your design is…
                </p>
                <a class="btn btn-danger btn-lg" href="{{ route('frontend.design') }}">More info</a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-yellow products-panel text-center">
                <img class="products-panel-icon" src="\img\website\cpe.svg">
                <h2>(CPE) Email Marketing</h2>
                <p>Email marketing has an average ROI of £38 for every £1 spent, and you're average order value is
                    likely to be 3x higher compared to leads from social media... But what if…</p>
                <a class="btn btn-yellow btn-lg" href="{{ route('frontend.cpe-campaigns') }}">More info</a>
            </div>
        </div>
    </div>
@endsection

@section('after-scripts-end')

@stop