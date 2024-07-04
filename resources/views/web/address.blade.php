@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Address
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
                    <h2><span>Address</span></h2>
                </div>
                <section class="events-list-area section-gap event-page-lists">
                    <div class="container">
                        <div class="row align-items-center mb-20">
                            <div class="col-sm-5 col-md-5 thumb galleryThum">
                                <img class="img-fluid img-thumbnail" src="{{asset('web/images/address1.jpg')}}" alt="address1">
                                <h5 class="text-center">Dr. Ambedkar Administrative Building </h5>
                            </div>
                            <div class="detials col-12 col-md-7">
                                <h4 class="inner-title">Vice-Chancellor Office & Administrative Campus</h4>
                                <ul class="custom-list-style">
                                    <li>Mahatma Gandhi Central University,</li>
                                    <li>Dr. Ambedkar Administrative Building,</li>
                                    <li>Near OP Thana, Raghunathpur, Motihari,</li>
                                    <li>District- East Champaran</li>
                                    <li>Bihar- 845401 (INDIA)</li>
                                    <li><i class="fa fa-envelope"></i> osdadmin@mgcub.ac.in</li>
                                    <li>Working Days/Hours: Mon-Sat / 09:30 AM- 6:00 PM</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row align-items-center mb-20">
                            <div class="col-12 col-md-5 thumb galleryThum">
                                <img class="img-fluid img-thumbnail" src="{{asset('web/images/address2.jpg')}}" alt="address2">
                                <h5 class="text-center">Chanakya Parisar</h5>
                            </div>
                            <div class="detials col-12 col-md-7">
                                <h4 class="inner-title">Academic Campus 1</h4>
                                <ul class="custom-list-style">
                                    <li>Mahatma Gandhi Central University,</li>
                                    <li>Chanakya Parisar,</li>
                                    <li>Near Sadar Hospital, Motihari</li>
                                    <li>District- East Champaran,</li>
                                    <li>Bihar- 845401 (INDIA)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row align-items-center mb-20">
                            <div class="col-12 col-md-5 thumb galleryThum">
                                <img class="img-fluid img-thumbnail" src="{{asset('web/images/Gandhi Bhawan.jpg')}}" alt="address3">
                                <h5 class="text-center">Gandhi Bhawan</h5>
                            </div>
                            <div class="detials col-12 col-md-7">
                                <h4 class="inner-title">Academic Campus 2</h4>
                                <ul class="custom-list-style">
                                    <li>Mahatma Gandhi Central University,</li>
                                    <li>Gandhi Bhawan,</li>
                                    <li>Bankat, Motihari,</li>
                                    <li>District- East Champaran,</li>
                                    <li>Bihar- 845401 (INDIA)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-12 col-md-5 thumb galleryThum">
                                <img class="img-fluid" src="{{asset('web/images/Pt. Deean Dayal Building.jpg')}}" alt="address4"
                                    style="width: 100%">
                                <h5 class="text-center">Pt. Deen Dayal Upadhayaya Parisar</h5>
                            </div>
                            <div class="detials col-12 col-md-7">
                                <h4 class="inner-title">Academic Campus 3</h4>
                                <ul class="custom-list-style">
                                    <li>Mahatma Gandhi Central University,</li>
                                    <li>Pt. Deen Dayal Upadhayaya Parisar,</li>
                                    <li>Near Pt. Ugam Pandey College Baluatal,</li>
                                    <li>Motihari,</li>
                                    <li>District- East Champaran,</li>
                                    <li>Bihar- 845401 (INDIA)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            @include('web.layouts.quick-link-contact')
        </div>
    </div>
</section>


@include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function() {
        document.title = "Address - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
