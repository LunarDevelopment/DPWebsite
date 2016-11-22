<div class="container-fluid hidden-sm hidden-xs" id="subscribe">
    <div class="row">
        <!-- Company Logo -->
        <div id="logo" class="header-logo">
            <a href="/"><img src="/img/website/logowithbox.png" alt="Digital Picnic Logo"></a>
        </div>
        <!-- Subscribe Bar -->
        <div class="container-fluid header-subscribe">
            <div class="row">
                <div class="container">
                    <div class="col-md-12">
                        <p class="text-center">Subscribe to our mailing list
                            <a class="btn btn-success" href="/subscribe">Join the Picnic</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="nav" class="container-fluid hidden-sm hidden-xs">
    <div class="row">
        <!-- Main navigation -->
        <nav class="navbar center navbar-default">

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                <div class="navbar-inner">
                    <ul class="nav navbar-nav">
                        <li class="parent-link-style">{{ link_to_route('frontend.index', trans('navs.frontend.index')) }}</li>
                        <li class="dropdown parent-link-style">
                            <a href="{{ route('frontend.about-us') }}"><span
                                        class="caret"></span> {{ trans('navs.frontend.about-us') }}</a>
                            <ul class="dropdown-menu">
                                <li>{{ link_to_route('frontend.about-us', trans('navs.frontend.about-us')) }}</li>
                                <li>{{ link_to_route('frontend.meet-the-team', trans('navs.frontend.meet-the-team')) }}</li>
                            </ul>
                        </li>
                        <li class="dropdown parent-link-style">
                            <a href="{{ route('frontend.products') }}"><span
                                        class="caret"></span> {{ trans('navs.frontend.products') }}</a>
                            <ul class="dropdown-menu">
                                <li>{{ link_to_route('frontend.marketing-lists', trans('navs.frontend.marketing-lists')) }}</li>
                                <li>{{ link_to_route('frontend.cpe-campaigns', trans('navs.frontend.cpe-campaigns')) }}</li>
                                <li>{{ link_to_route('frontend.managed-email-campaigns', trans('navs.frontend.managed-email-campaigns')) }}</li>
                                <li>{{ link_to_route('frontend.design', trans('navs.frontend.design')) }}</li>
                            </ul>
                        </li>
                        <li class="dropdown parent-link-style">
                            <a href="{{ route('frontend.contact-us') }}"><span
                                        class="caret"></span> {{ trans('navs.frontend.contact-us') }}</a>
                            <ul class="dropdown-menu">
                                <li>{{ link_to_route('frontend.contact-us', trans('navs.frontend.contact-us')) }}</li>
                                <li>{{ link_to_route('frontend.subscribe', trans('navs.frontend.subscribe')) }}</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="container-fluid hidden-md hidden-lg">
    <div class="row">
        <!-- Main navigation -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="/img/website/dplogo.svg"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="navbar-inner">
                        <ul class="nav navbar-nav">
                            <li>{{ link_to_route('frontend.index', trans('navs.frontend.index')) }}</li>
                            <li>{{ link_to_route('frontend.about-us', trans('navs.frontend.about-us')) }}</li>
                            <li>{{ link_to_route('frontend.meet-the-team', trans('navs.frontend.meet-the-team')) }}</li>
                            <li>{{ link_to_route('frontend.products', trans('navs.frontend.products')) }}</li>
                            <li>{{ link_to_route('frontend.marketing-lists', trans('navs.frontend.marketing-lists')) }}</li>
                            <li>{{ link_to_route('frontend.cpe-campaigns', trans('navs.frontend.cpe-campaigns')) }}</li>
                            <li>{{ link_to_route('frontend.managed-email-campaigns', trans('navs.frontend.managed-email-campaigns')) }}</li>
                            <li>{{ link_to_route('frontend.design', trans('navs.frontend.design')) }}</li>
                            <li>{{ link_to_route('frontend.contact-us', trans('navs.frontend.contact-us')) }}</li>
                            <li>{{ link_to_route('frontend.subscribe', trans('navs.frontend.subscribe')) }}</li>
                        </ul>
                    </div>
                </div>
        </nav>
    </div>
</div>