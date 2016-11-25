<div class="container-fluid footer-body hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <p><strong>Address:</strong><br>
                    Digital Picnic. The Picnic Area<br>
                    1 Pink Lane, Newcastle Upon Tyne. NE1 5DW</p>
                <p><strong>Email:</strong> <a href="mailto:info@digital-picnic.email">info@digital-picnic.email</a><br>
                    <strong>Phone:</strong> 0191 235 9569</p>
            </div>
            <div class="col-sm-3 footer-social">
                <p>
                    <strong>Social:</strong><br>
                    <a href="https://twitter.com/digitalpicnicuk" target="_blank"><img class="social-icon" src="/img/website/twitter.svg"></a>
                    <a href="https://www.linkedin.com/company/direct-mail-associates-dma-data-www-dmadata-co-uk" target="_blank"><img class="social-icon" src="/img/website/linkedin.svg"></a>
                    <a href="https://www.instagram.com/digitalpicnicltd/"><img class="social-icon" src="/img/website/instagram.svg" target="_blank"></a>
                    <strong>Subscribe:</strong><br>
                    <a style="margin-top: 15px;" href="/subscribe" class="btn btn-darkgreen">Join the Picnic</a>
                </p>
            </div>
            <div class="col-sm-3" style="border:none;text-transform:capitalize;">
                <ul>
                    <li><a href="/">{{ trans('navs.frontend.index') }}</li>
                    <li><a href="about-us">{{ trans('navs.frontend.about-us') }}</li>
                    <li><a href="contact-us">{{ trans('navs.frontend.contact-us') }}</li>
                    <li><a href="faq">{{ trans('navs.frontend.faq') }}</li>
                    <li><a href="privacy-policy">{{ trans('navs.frontend.privacy-policy') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid footer-body footer-mobile hidden-lg hidden-sm hidden-md">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <p>
                    <strong>Social:</strong><br>
                    <a href="{{ $socials['twitter'] }}"><img class="social-icon" src="/img/website/twitter.svg"></a>
                    <a href="{{ $socials['linkedin'] }}"><img class="social-icon" src="/img/website/linkedin.svg"></a>
                    <a href="{{ $socials['instagram'] }}"><img class="social-icon" src="/img/website/instagram.svg"></a>
                </p>
                <p>
                    <strong>Subscribe:</strong><br>
                    <a href="/subscribe" class="btn btn-darkgreen">Join the Picnic</a>
                </p>
                <p><strong>Address:</strong><br>
                    Digital Picnic. The Picnic Area<br>
                    1 Pink Lane, Newcastle. Ne1 5DW</p>
                <p><strong>Email:</strong> info@digital-picnic.email<br>
                    <strong>Phone:</strong> 0191 235 9569</p>
            </div>
        </div>
    </div>
</div>