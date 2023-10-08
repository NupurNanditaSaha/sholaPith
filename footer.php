<footer>
    <div class="container-fluid">
        <div class="row align-items-start justify-content-center">
            <div class="col-lg-3">
                <h5 class="foooter-heading get-in-touch">Get in touch</h5>
                <ul class="address-list">
                    <li>
                        <span class="footer-icon">
                            <img class="img-fluid" src="./assets/images/home/foooter-map-icon.svg" alt="">
                        </span>
                        <p class="address">
                            141/A, A.C.Road, Khagra, Berhampore, Murshidabad, West Bengal - 742103
                        </p>
                    </li>
                    <li>
                        <span class="footer-icon">
                            <img class="img-fluid" src="./assets/images/home/foooter-phone-icon.svg" alt="">
                        </span>
                        <a href="tel:9775600370">+91 9775600370</a>
                    </li>
                    <li>
                        <span class="footer-icon">
                            <img class="img-fluid" src="./assets/images/home/foooter-email-icon.svg" alt="">
                        </span>
                        <a href="mailto:info@sholapith.com">info@sholapith.com</a>
                    </li>

                </ul>
            </div>
            <div class="col-lg-2">
                <h5 class="foooter-heading">Quick Link</h5>
                <ul class="footer-quick-link">
                    <li><a href="">Home</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">How we work</a></li>
                    <li><a href="">Our Prodcuts</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <div class="footer-logo text-center">
                    <img class="img-fluid" src="./assets/images/png/logo-img.png" alt="">
                </div>
                <div class="footer-logo text-center">
                    <img class="img-fluid" src="./assets/images/home/footer-text-logo.svg" alt="">
                </div>
            </div>
            <div class="col-lg-3">
                <h5 class="foooter-heading">NewsLetter</h5>
                <p class="newsletter">
                    Subscribe to our newsletter today for exclusive first-hand updates on all our offers, new
                    launches and deals. Connect with us right away to know more!
                </p>

                <form action="" class="newsletter-form">
                    <input type="email" class="form-control" placeholder="Enter your email">
                    <button type="submit" class="newsletter-submit">
                        <img class="img-fluid" src="./assets/images/png/newsetter-submit.png" alt="newsletter submit button">
                    </button>
                </form>
            </div>
            <div class="col-lg-2">
                <h5 class="foooter-heading ">Social Media</h5>
                <ul class="social-links">
                    <li><a href="">
                            <img class="img-fluid" src="./assets/images/home/facebook.svg" alt="facebook icon">
                        </a></li>
                    <li><a href="">
                            <img class="img-fluid" src="./assets/images/home/youtube.svg" alt="youtube icon">
                        </a></li>
                    <li><a href="">
                            <img class="img-fluid" src="./assets/images/home/linkdin.svg" alt="linkedin icon">
                        </a></li>
                </ul>
                <picture class="biswa-bangla-logo">
                    <source srcset="assets/images/webp/biswa-bangla-logo.webp" media="(min-width:320px)">
                    <img class=" img-fluid" src="assets/images/png/biswa-bangla-logo.png" alt="biswa-bangla-logo">
                </picture>
            </div>
            <div class="col-lg-12">
                <div class="copyright">
                    <p class="text-center">&#169; sholapith.com 2023. | All rights reserved. </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- <script src="./assets/js/owl.carousel.js"></script>
    <script src="./assets/js/slick.js"></script> -->
<script>
    $(document).ready(function() {
        $('.lang-li').click(function(e) {
            $('.lang-li').removeClass('active');
            $(this).addClass('active');


            $('.lang-name').html($(this).attr('data-lang-name'));
            //$('.cut-price').show().html($(this).attr('data-cut-prc'));
            var link = $(this).attr('data-href');
            // $('#mainbuybtn').attr('href', link);
        });
        // $('.banner-carousel-btn .carousel-control-next').addClass('focused');
        // $('.banner-carousel-btn').click(function (e) {
        //     $('.banner-carousel-btn .carousel-control-next').removeClass('focused');
        //     $(this).addClass('focused');
        // });


    });
</script>
</body>

</html>