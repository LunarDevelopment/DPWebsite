@extends('frontend.layouts.products')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <img class="panel-icon" src="\img\website\data.svg">
                    <h1>Marketing Lists</h1>
                    <p><strong>Our marketing lists offer you the opportunity to reach senior decision makers in a range
                            of industries within the UK – giving you the opportunity to generate new business and
                            increase brand awareness.</strong></p>
                    <p>Whether you need an email address, telephone number
                        or need to know how many employees a company has,
                        you can find it within our data records.</p>
                    <p>Our databases are updated regularly which ensures we’ve
                        got the most relevant information to help your marketing
                        campaign go off without a hitch. Regular updates to the
                        database also make things easier for you – you don’t want
                        to be ringing a large number of companies just to discover
                        you have incorrect information or spend your money on a
                        direct marketing campaign that’s going to be delivered to
                        the wrong address.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid testimonial bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>We've been working with Digital Picnic since October '15 and I can't recommend them enough. Their
                        team are truly excellent, they're always on hand and ALWAYS to a very high, knowledgeable, and
                        professional level. The data we've licensed so far has also been of a very high standard. If you
                        haven’t already realised, your business needs one of their digital sandwiches! Now!
                        <span>Kieran Hayes, Perfect Web Design, Epic-Digital, Superluminal Software</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container packages">
        <div class="row">
            <div class="col-md-12">
                <h3>Below are just a few examples of data packages we currently provide</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="single-package bg-primary">Education</div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-package bg-primary">Manufacturing</div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-package bg-primary">Transport</div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-package bg-primary">Retail & Wholesale</div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-package bg-primary">Hospitality & Leisure</div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-package bg-primary">SMEs</div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-package bg-primary">Farming</div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-package bg-primary">Care & Nursing</div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-package bg-primary">Finance</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>Call us today on <a href="tel:+441912359569">0191 235 9569</a> to find out how the Picnic can help
                    you!</p>
            </div>
        </div>
    </div>
@endsection

@section('before-scripts-end')
    <script src="/js/meet-the-team.js"></script>
@endsection