<div>
    {{-- Be like water. --}}
     <!-- ======= hero Section ======= -->
     <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/1.jpg)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown"> Empowering Local Communities for Self-Reliance</h2>
                                <p class="animate__animated animate__fadeInUp">By simplifying processes and fostering entrepreneurship. </p>
                                <a href="#about"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/2.png)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Simplifying Panchayat Processes for Business Development</h2>
                                <p class="animate__animated animate__fadeInUp">Cut through red tape, get approvals faster.</p>
                                <a href="#about"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/3.png)">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Helping Villages Access Opportunity</h2>
                                <p class="animate__animated animate__fadeInUp">Unleash local potential. We simplify access to resources and support.</p>
                                <a href="#about"
                                    class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <div id="about" class="about-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>About Panchayat </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- single-well start-->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="well-left">
                            <div class="single-well">
                                <a href="#">
                                    <img src="assets/img/about/1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="well-middle">
                            <div class="single-well">
                                <a href="#">
                                    <h4 class="sec-head">Mangaluru Taluk Panchayat</h4>
                                </a>
                                <p>
                                Mangalore Taluk Panchayat is a local governing body in Mangalore, India, responsible for rural areas within the taluk (administrative division). 
                                It is also involved in activities like rural development, managing local infrastructure, and public services in villages around Mangalore.
                                </p>
                                <ul>
                                    <li>
                                        <i class="bi bi-check"></i> Rural development programs
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i> Infrastructure management
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i> Public service delivery
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i> Local governance
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i> Planning and budgeting
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End col-->
                </div>
            </div>
        </div><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <div id="services" class="services-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline services-head text-center">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <!-- Start Left services -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="{{ route('water') }}">
                                        <i class="bi bi-water"></i>
                                        
                                    </a>
                                    <a href="{{ route('water')}}"><h4>Water</h4></a>
                                    <p>
                                        will have to make sure the prototype looks finished by inserting text or
                                        photo.make sure the prototype looks finished by.
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="{{ route('electricity') }}">
                                        <i class="bi bi-power"></i>
                                    </a>
                                    <a href="{{ route('electricity')}}"><h4>Electricity</h4></a>
                                    <p>
                                        will have to make sure the prototype looks finished by inserting text or
                                        photo.make sure the prototype looks finished by.
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class=" about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon" href="{{ route('survey') }}">
                                        <i class="bi bi-card-checklist"></i>
                                    </a>
                                    <a href="{{ route('survey')}}"><h4>Plot Survey</h4></a>
                                    <p>
                                        will have to make sure the prototype looks finished by inserting text or
                                        photo.make sure the prototype looks finished by.
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <!-- end col-md-4 -->
                        <div class=" about-move">
                            <div class="services-details">
                                <div class="single-services">
                                    <a class="services-icon"  href="{{ route('ward') }}">
                                        <i class="bi bi-binoculars"></i>
                                    </a>
                                    <a href="{{ route('ward')}}"><h4>Ward Details</h4></a>
                                    <p>
                                        will have to make sure the prototype looks finished by inserting text or
                                        photo.make sure the prototype looks finished by.
                                    </p>
                                </div>
                            </div>
                            <!-- end about-details -->
                        </div>
                    </div>
                   
                   
                </div>
            </div>
</div><!-- End Services Section -->

        <!-- ======= Team Section ======= -->
        <div id="team" class="our-team-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>Our special Team</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <!-- <img src="assets/img/team/1.jpg" alt=""> -->
                                </a>
                                <div class="team-social-icon text-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Karthik Ganapa R</h4>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div>
                    <!-- End column -->
                    <div class="col-md-4 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <!-- <img src="assets/img/team/2.jpg" alt=""> -->
                                </a>
                                <div class="team-social-icon text-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Manasa M Shetty</h4>
                                <p>Web Designer</p>
                            </div>
                        </div>
                    </div>
                    <!-- End column -->
                    <div class="col-md-4 col-sm-3 col-xs-12">
                        <div class="single-team-member">
                            <div class="team-img">
                                <a href="#">
                                    <!-- <img src="assets/img/team/3.jpg" alt=""> -->
                                </a>
                                <div class="team-social-icon text-center">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bi bi-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Likhith Kumar</h4>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div>
                    <!-- End column -->
                   
                    <!-- End column -->
                </div>
            </div>
        </div><!-- End Team Section -->

        <!-- ======= Rviews Section ======= -->
        <div class="reviews-area">
            <div class="row g-0">
                <div class="col-lg-6">
                    <img src="assets/img/about/2.png" alt="" class="img-fluid" style="width:960px; height:560px">
                </div>
                <div class="col-lg-6 work-right-text d-flex align-items-center">
                    <div class="px-5 py-5 py-lg-0">
                        <h2>Work with us to build stronger panchayats</h2>
                        <h5>Together, let's empower local communities and unlock village potential.</h5>
                        <a href="#contact" class="ready-btn scrollto">Contact us</a>
                    </div>
                </div>
            </div>
        </div><!-- End Rviews Section -->

       


        <!-- ======= Suscribe Section ======= -->
        <div class="suscribe-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                        <div class="suscribe-text text-center">
                            <h3>Welcome to your Panchayat's one-stop shop!</h3>
                            <a class="sus-btn" href="#">Get A quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Suscribe Section -->

        <!-- ======= Contact Section ======= -->
        <div id="contact" class="contact-area">
            <div class="contact-inner area-padding">
                <div class="contact-overly"></div>
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h2>Contact us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Start contact icon column -->
                        <div class="col-md-4">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="bi bi-phone"></i>
                                    <p>
                                        Call: +91 7795295690 <br>
                                        <span>Monday-Friday (9am-5pm)</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="bi bi-envelope"></i>
                                    <p>
                                        Email: mangalorepanchayat@gmail.com<br>
                                        <span>Web: www.mangalorepanchayat.com</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="bi bi-geo-alt"></i>
                                    <p>
                                        Location: VR7R+R52, Attavar, Mangaluru<br>
                                        <span>Karnataka, 575001</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <!-- Start Google Map -->
                        <div class="col-md-6">
                            <!-- Start Map -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.670991048549!2d74.83780937415276!3d12.864514217218858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba35bb2c9ac0637%3A0x7348f3b3cc43f967!2sMangalore%20Taluk%20Panchayat!5e0!3m2!1sen!2sin!4v1710660736918!5m2!1sen!2sin" 
                                width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <!-- End Map -->
                        </div>
                        <!-- End Google Map -->

                        <!-- Start  contact -->
                        <div class="col-md-6">
                            <div class="form contact-form">
                                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            placeholder="Subject" required>
                                    </div>
                                    <div class="form-group mt-3">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                            required></textarea>
                                    </div>
                                    <div class="my-3">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>
                                    </div>
                                    <div class="text-center"><button type="submit">Send Message</button></div>
                                </form>
                            </div>
                        </div>
                        <!-- End Left contact -->
                    </div>
                </div>
            </div>
        </div><!-- End Contact Section -->
    </main><!-- End #main -->

</div>
