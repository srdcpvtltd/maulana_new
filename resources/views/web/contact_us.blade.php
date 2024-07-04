@include('web.layouts.header')

<style>
    .contact-bg {
        padding: 10px;
        background-color: #eeeeee;
    }

    h5 {
        color: #ff6262 !important;
    }
</style>
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Contact Us
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href="#"> Contact Us</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">Address</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Contact</span> Us</h2>
                </div>
                <section class="popular-courses-area section-gap courses-page">
                    <div class="container">
                        <div class="row">
                            <div class="single-popular-carusel col-lg-4 col-md-6">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="{{ asset('web/images/faculty/Sachidanand.jpg') }}"
                                            style="height: 280px;">
                                    </div>
                                </div>
                                <div class="details contact-bg">
                                    <h5>
                                        Mr Sachchidanand Singh
                                    </h5>
                                    <ul>
                                        <li>OSD Administration / Deputy Registrar (Establishment)</li>
                                        <li class="break-line"><i class="fa fa-envelope"></i> osdadmin@mgcub.ac.in</li>
                                        <!-- <li><i class="fa fa-phone"></i> 9628203811</li> -->
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="single-popular-carusel col-lg-4 col-md-6">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="images/faculty/Rajeev Kumar.jpg" alt="Rajeev Kumar" style="height: 280px;">
                                    </div>
                                </div>
                                <div class="details contact-bg">
                                    <h5>
                                        Prof Rajeev Kumar,
                                    </h5>
                                    <ul>
                                        <li>OSD Administration</li>
                                        <li class="break-line"><i class="fa fa-envelope"></i> osdadmin@mgcub.ac.in</li>
                                        <li><i class="fa fa-phone"></i> 8707310684</li>
                                    </ul>
                                </div>
                            </div>	 -->
                            <div class="single-popular-carusel col-lg-4 col-md-6">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="{{ asset('web/images/faculty/Vikas Pareek.jpg') }}"
                                            alt="Vikas Pareek" style="height: 280px;">
                                    </div>
                                </div>
                                <div class="details contact-bg">
                                    <h5>
                                        Prof Vikas Pareek
                                    </h5>
                                    <ul>
                                        <li>OSD (Finance)</li>
                                        <li class="break-line"><i class="fa fa-envelope"></i> osdfinance@mgcub.ac.in
                                        </li>
                                        <!-- <li><i class="fa fa-phone"></i> 9828373081</li> -->
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="single-popular-carusel col-lg-4 col-md-6">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="images/faculty/Sachidanand.jpg" alt="Sachidanand" style="height: 280px;">
                                    </div>
                                </div>
                                <div class="details contact-bg">
                                    <h5>
                                        Mr Sachchida Nand Singh
                                    </h5>
                                    <ul>
                                        <li>Deputy Registrar (Establishment)</li>
                                        <li class="break-line"><i class="fa fa-envelope"></i> dr.admin@mgcub.ac.in</li>
                                        <li><i class="fa fa-phone"></i> 9628203811</li>
                                    </ul>
                                </div>
                            </div> -->
                            <div class="single-popular-carusel col-lg-4 col-md-6">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid"
                                            src="{{ asset('web/images/faculty/Shephalika Mishra.jpg') }}"
                                            style="height: 280px;">
                                    </div>
                                </div>
                                <div class="details contact-bg">
                                    <h5>
                                        Ms Shephalika Mishra
                                    </h5>
                                    <ul>
                                        <li>Public Relation Officer</li>
                                        <li class="break-line"><i class="fa fa-envelope"></i> pro@mgcub.ac.in</li>
                                        <li><i class="fa fa-phone"></i> 9654598288</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <h4>Address</h4>
                <ul class="mb-20">
                    <li>Mahatma Gandhi Central University,</li>
                    <li>Dr. Ambedkar Administrative Building,</li>
                    <li>Near OP Thana, Raghunathpur, Motihari,</li>
                    <li>District- East Champaran</li>
                    <li>Bihar- 845401 (INDIA)</li>
                </ul>
                <a href="directory.php" class="btn btn-primary">Directory</a>
            </div>
            @include('web.layouts.quick-link-contact')
        </div>
    </div>
</section>



@include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function() {
        document.title = "Contact Us - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
