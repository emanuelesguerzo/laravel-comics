<footer class="footer">
    <div class="footer-top d-flex container gap-5 py-4">
        

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

            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="DC Logo" class="dc-logo">
        
    </div>
    <div class="footer-bottom  justify-content-between align-items-center py-3">
        <div class="container d-flex justify-content-between align-items-center py-4">
            <button class="btn btn-primary">Sign-up now!</button>
            <div class="socials d-flex gap-3">
                <p class="text-white follow">Follow us</p>
                <a href="#"><img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt=""></a>
                <a href="#"><img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt=""></a>
                <a href="#"><img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt=""></a>
                <a href="#"><img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt=""></a>
                <a href="#"><img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt=""></a>
            </div>
        </div>
    </div>
</footer>
