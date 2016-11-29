<div class="container-fluid hidden-sm hidden-xs" id="subscribe">
    <div class="row">
        <!-- Subscribe Bar -->
        <div class="container-fluid header-subscribe">
            <div class="row">
                <div class="container">
                    <div class="col-md-12">
                        <p class="text-center">Subscribe to our mailing list
                            <a style="margin-left: 15px;" class="btn btn-success" href="/subscribe">Join the Picnic</a></p>
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
            <!-- Company Logo -->
            <div id="logo" class="header-logo">
                <a href="/"><img id="logo-img" src="/img/website/logowithbox.png" alt="Digital Picnic Logo"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                <div class="navbar-inner">
                    <ul class="nav navbar-nav">
                        <li class="parent-link-style"><a href="/">{{  trans('navs.frontend.index') }}</a></li>
                        <li class="dropdown parent-link-style">
                            <a href="/about-us"><span
                                        class="caret"></span>{{ trans('navs.frontend.about-us') }}</a>
                            <ul class="dropdown-menu">
                                <li><a href="/about-us">{{ trans('navs.frontend.about-us') }}</a></li>
                                <li><a href="/meet-the-team">{{ trans('navs.frontend.meet-the-team') }}</a></li>
                            </ul>
                        </li>
                        <li class="dropdown parent-link-style">
                            <a href="/"><span
                                        class="caret"></span> {{ trans('navs.frontend.products') }}</a>
                            <ul class="dropdown-menu">
                                <li><a href="/marketing-lists">{{ trans('navs.frontend.marketing-lists') }}</a></li>
                                <li><a href="/managed-email-campaigns">{{ trans('navs.frontend.managed-email-campaigns') }}</a></li>
                                <li><a href="/design">{{ trans('navs.frontend.design') }}</a></li>
                                <li><a href="/cpe-campaigns">{{ trans('navs.frontend.cpe-campaigns') }}</a></li>
                            </ul>
                        </li>
                        <li class="dropdown parent-link-style">
                            <a href="/contact-us"><span
                                        class="caret"></span> {{ trans('navs.frontend.contact-us') }}</a>
                            <ul class="dropdown-menu">
                                <li><a href="/contact-us">{{  trans('navs.frontend.contact-us') }}</a></li>
                                <li><a href="/subscribe">{{  trans('navs.frontend.subscribe') }}</a></li>
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
                            <li><a href="/">{{ trans('navs.frontend.index') }}</a></li>
                            <li><a href="/about-us">{{  trans('navs.frontend.about-us') }}</a></li>
                            <li><a href="/meet-the-team">{{  trans('navs.frontend.meet-the-team') }}</a></li>
                            <li><a href="/products">{{  trans('navs.frontend.products') }}</a></li>
                            <li><a href="/marketing-lists">{{  trans('navs.frontend.marketing-lists') }}</a></li>
                            <li><a href="/managed-email-campaigns">{{  trans('navs.frontend.managed-email-campaigns') }}</a></li>
                            <li><a href="/design">{{  trans('navs.frontend.design') }}</a></li>
                            <li><a href="/cpe-campaigns">{{ trans('navs.frontend.cpe-campaigns') }}</a></li>
                            <li><a href="/contact-us">{{ trans('navs.frontend.contact-us') }}</a></li>
                            <li><a href="/subscribe">{{ trans('navs.frontend.subscribe') }}</a></li>
                        </ul>
                    </div>
                </div>
        </nav>
    </div>
</div>