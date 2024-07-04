@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    How to Reach
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href="#"> Contact Us</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">How to Reach</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>How to </span>Reach</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <p class="text-justify">Motihari, East Champaran, Bihar, is a place well known for historical
                            Satyagrah Movement of Mahatma Gandhi during freedom struggle of India. This is well
                            connected by both national and international carriers. There are daily flights from nearest
                            airport Patna to different parts of the Country and overseas. The city is also well
                            connected to national destinations by Indian Railways and Roadways. It is well connected to
                            the other parts of the country by national highways – 28/28A. </p>
                        <div class="row">
                            <div class="col-md-8">
                                <h5>By Train</h5>
                                <p class="text-justify">The town of Motihari has a railway station of its own, named
                                    Bapudham Motihari (station code -BMKI), with regular trains to all major
                                    destinations. You can thus opt for trains to Motihari directly, and this may be the
                                    good option. Train fares are cheaper than bus fares too, but tickets need to be
                                    booked well in advance in order to travel through trains comfortably. The railway
                                    station in Motihari will have regular trains to the cities and towns of New Delhi,
                                    Kolkata, Mumbai, Gorakhpur, Lucknow, Varanasi, Ahmedabad, Jammu and Raxaul.
                                    For more details regarding train service, kindly visit Indian Railway Catering &
                                    Tourism Corporation Limited or Indian Railway.
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="whiteBox" style="float: none;">
                                    <img src="{{ asset('web/images/address2.jpg') }}" alt="address2"
                                        class="img-responsive">
                                </div>
                            </div>
                        </div>
                        <h5>By Road</h5>
                        <p class="text-justify">Buses to the town of Motihari will be available regularly from the
                            capital city of Patna, which is 160 kilometres . The buses may charge fares of around Rs 210
                            to 250 per person. Buses will mostly be run under the state government/private.</p>
                        <p class="text-justify">Some of the important stations/routes from where regular buses service
                            is available to & from Motihari:</p>
                        <ul class="custom-list-style mb-20">
                            <li><i class="fa fa-check"></i> Motihari - Gorakhpur - Lucknow - New Delhi</li>
                            <li><i class="fa fa-check"></i> Motihari - Kolkata</li>
                            <li><i class="fa fa-check"></i> Bodh Gaya - Patna - Muzaffarpur - Motihari - Birgunj -
                                Kathmandu</li>
                            <li><i class="fa fa-check"></i> Motihari - Muzaffurpur - Hajaipur - Patna – Ranchi</li>
                            <li><i class="fa fa-check"></i> Betia - Motihari - Muzaffarpur - Hajipur - Patna</li>
                            <li><i class="fa fa-check"></i> Chapra - Siwan - Gopalganj - Motihari</li>
                        </ul>
                        <h5>By Air</h5>
                        <p class="text-justify">The nearest Airport to Motihari is Patna Airport (Lok Nayak Jayprakash
                            International Airport). Patna Airport is about 160 KMs far from Motihari and frequent Bus /
                            Taxi service is available to and from the Patna Air Port. The other nearest airports are
                            Gorakhpur (198 KMs), and Chaudhary Charan Singh Airport, Lucknow (approx. 473 Kms). Frequent
                            Flights to various national and international destinations take off from all the three
                            airports. From Patna and Gorakhpur airports to MGCU Motihari may also be travelled by App
                            based outstation cabs.</p>
                        <h5>Road Distance From Major Nearby Cities: </h5>
                        <ul class="custom-list-style">
                            <li><i class="fa fa-check"></i> From Patna: 160 KMs Approx.</li>
                            <li><i class="fa fa-check"></i> From Muzaffarpur : 80 KMs Approx.</li>
                            <li><i class="fa fa-check"></i> From Raxaul : 52 KMs Approx.</li>
                            <li><i class="fa fa-check"></i> From Gorakhpur: 200 KMs Approx. </li>
                        </ul>
                    </div>
                </div>
            </div>
            @include('web.layouts.quick-link-contact')
        </div>
    </div>
</section>



@include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function() {
        document.title = "How to Reach - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
