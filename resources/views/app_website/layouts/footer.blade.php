<!--footer section start-->
        <footer class="footer-section">
            <!--footer top start-->
            <!--for light footer add .footer-light class and for dark footer add .bg-dark .text-white class-->
            <div class="footer-top footer-light ptb-120">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-8 col-lg-4 mb-md-4 mb-lg-0">
                            <div class="footer-single-col">
                                <div class="footer-single-col mb-4">
                                    <img src="{{ asset('app_assets/img/logo.png') }}"  alt="logo" class="img-fluid logo-white">
                                    <img src="{{ asset('app_assets/img/logo1.png') }}"   alt="logo" class="img-fluid logo-color">
                                </div>
                                <p>Our latest news, articles, and resources, we will sent to
                                    your inbox weekly.</p>

                                <form method="post" action="{{ route('sub.request') }}" class="newsletter-form position-relative d-block d-lg-flex d-md-flex">
                                @csrf
                                    <input type="text" class="input-newsletter form-control me-2" placeholder="Enter your email" required name="Email"  autocomplete="off">
                                    <input type="submit" value="Subscribe" data-wait="Please wait..." class="btn btn-primary mt-3 mt-lg-0 mt-md-0" style="font-size:15px;padding:10px; background-image: linear-gradient(to right, #FF3CA9   , #FF0D5D   );color:white">
                                </form>
                                @error('Email')<p class="text-danger">{{ $message }}</p>@enderror
                                <div class="ratting-wrap mt-4">
                                    <h6 class="mb-0">10/10 Overall rating</h6>
                                    <ul class="list-unstyled rating-list list-inline mb-0">
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-7 mt-4 mt-md-0 mt-lg-0">
                            <div class="row">
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Primary Pages</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="{{ route('app.home') }}" class="text-decoration-none">Home</a></li>
                                            <li><a href="{{ route('app.about') }}" class="text-decoration-none">About Us</a></li>
                                            <li><a href="{{ route('app.contact') }}" class="text-decoration-none">Contact us</a></li>
                                            <!--<li><a href="career.html" class="text-decoration-none">Career</a></li>-->
                                            <!--<li><a href="integrations.html" class="text-decoration-none">Integrations</a>-->
                                            <!--</li>-->
                                            <!--<li><a href="integration-single.html" class="text-decoration-none">Integration Single</a></li>-->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Software</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                             <li><a href="{{ route('app.demos') }}" class="text-decoration-none">All Software Demos</a></li>
                                            <!--<li><a href="blog.html" class="text-decoration-none">Admin Panel</a></li>-->
                                            <!--<li><a href="blog.html" class="text-decoration-none">Student Panel</a></li>-->
                                            <!--<li><a href="blog-single.html" class="text-decoration-none">Blog Details</a></li>-->
                                            <!--<li><a href="contact-us.html" class="text-decoration-none">Contact</a></li>-->
                                            <!--<li><a href="career-single.html" class="text-decoration-none">Career Single</a>-->
                                            <!--</li>-->
                                            <!--<li><a href="service-single.html" class="text-decoration-none">Services-->
                                            <!--        Single</a></li>-->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Getway to the app</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                             <li><a href="{{ route('login') }}" class="text-decoration-none">Admin Panel</a></li>
                                            <li><a href="{{ route('student_login_form') }}" class="text-decoration-none">Student Panel</a></li>
                                            <li><a href="{{ route('home') }}" class="text-decoration-none">Website front-end</a></li>
                                           
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--footer top end-->

            <!--footer bottom start-->
            <div class="footer-bottom footer-light py-4">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-7 col-lg-7">
                            <div class="copyright-text">
                                <p class="mb-lg-0 mb-md-0">&copy; 2023 EduDeve Reserved. Designed By <a href="https://edudeve.com/" class="text-decoration-none">EduDeve</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="footer-single-col text-start text-lg-end text-md-end">
                                <ul class="list-unstyled list-inline footer-social-list mb-0">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer bottom end-->
        </footer> 
        <!--footer section end-->
