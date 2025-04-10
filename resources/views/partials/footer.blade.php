{{-- Load More Button --}}
<a class="more-btn">Load More</a>

{{-- Banner --}}
<div class="banner py-5">
    <div class="container">
        <div class="row banner-row user-select-none row-gap-4 justify-content-between">

            {{-- Banner Slot 1 --}}
            <div class="col-12 col-md-4 col-lg-2 d-flex align-items-center justify-content-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                <span>Digital Comics</span>
            </div>

            {{-- Banner Slot 2 --}}
            <div class="col-12 col-md-4 col-lg-3 d-flex align-items-center justify-content-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                <span>DC Merchandise</span>
            </div>

            {{-- Banner Slot 3 --}}
            <div class="col-12 col-md-4 col-lg-2 d-flex align-items-center justify-content-center gap-2">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                <span>Subscription</span>
            </div>

            {{-- Banner Slot 4 --}}
            <div class="col-12 col-md-6 col-lg-3 d-flex align-items-center justify-content-center">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                <span>Comic Shop Locator</span>
            </div>

            {{-- Banner Slot 5 --}}
            <div class="col-12 col-md-6 col-lg-2 d-flex align-items-center justify-content-center gap-2">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                <span>DC Power Visa</span>
            </div>

        </div>
    </div>

</div>

{{-- Footer --}}
<footer class="footer">
    <div class="footer-top d-flex container gap-4 py-4">

        {{-- Column 1 --}}
        <div class="column">
            <h4>DC Comics</h4>
            <ul>
                <li><a href="#">Characters</a></li>
                <li><a href="#">Comics</a></li>
                <li><a href="#">Movies</a></li>
                <li><a href="#">TV</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">News</a></li>
            </ul>
            <h4>Shop</h4>
            <ul>
                <li><a href="#">Shop DC</a></li>
                <li><a href="#">Shop DC Collectibles</a></li>
            </ul>
        </div>

        {{-- Column 2 --}}
        <div class="column">
            <h4>DC</h4>
            <ul>
                <li><a href="#">Terms Of Use</a></li>
                <li><a href="#">Privacy policy (New)</a></li>
                <li><a href="#">Ad Choices</a></li>
                <li><a href="#">Advertising</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Subscriptions</a></li>
                <li><a href="#">Talent Workshop</a></li>
                <li><a href="#">CPSC Certificates</a></li>
                <li><a href="#">Ratings</a></li>
                <li><a href="#">Shop Help</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>

        {{-- Column 3 --}}
        <div class="column">
            <h4>Sites</h4>
            <ul>
                <li><a href="#">DC</a></li>
                <li><a href="#">MAD Magazine</a></li>
                <li><a href="#">DC Kids</a></li>
                <li><a href="#">DC Universe</a></li>
                <li><a href="#">DC Power Visa</a></li>
            </ul>
        </div>

        {{-- Background Overlay Image --}}
        <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="DC Logo" class="dc-logo user-select-none">

    </div>

    {{-- Footer Bottom --}}
    <div class="footer-bottom py-5">
        <div class="container footer-mobile  d-flex justify-content-between align-items-center py-1">
            
            {{-- Sign Up Button --}}
            <button class="sign-up-btn">Sign-up now!</button>

            {{-- Footer Socials --}}
            <div class="socials flex-wrap d-flex gap-3">

                {{-- Footer Socials Text --}}
                <div class="social-top">
                    <p class="user-select-none follow">Follow us</p>
                </div>

                {{-- Footer Socials Links --}}
                <div class="social-bottom d-flex align-items-center gap-3">

                    {{-- Facebook --}}
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Link pagina Facebook">
                    </a>

                    {{-- Twitter --}}
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Link pagina Twitter">
                    </a>

                    {{-- Youtube --}}
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="Link pagina Youtube">
                    </a>
                        
                    {{-- Pinterest --}}
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Link pagina Pinterest">
                    </a>

                    {{-- Periscope --}}
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="Link pagina Periscope">
                    </a>
                    
                </div>

            </div>
        </div>
    </div>
</footer>
