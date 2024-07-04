@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Statutory Administrative Officers
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href=""> Administration</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">Statutory Administrative Officers</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Statutory Administrative </span>Officers</h2>
                </div>
                <div class="desc-wrap marquee_text">
                    <div class="executive-table">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Designation</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Contact</th>
                                        <th class="text-center">Resume</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Vice Chancellor</td>
                                        <td>Prof. Sanjay Srivastava</td>
                                        <td><a href="mailto:vc@mgcub.ac.in">vc@mgcub.ac.in</a></td>
                                        <td>06252-241007,<br>06252-241008</td>
                                        <td>
                                            <center><a href="#" class="resume-icon"><i
                                                        class="fa fa-file-pdf-o"></i></a></center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OSD, Administration</td>
                                        <td> Shri Sachchidanand Singh </td>
                                        <td><a href="mailto:osdadmin@mgcub.ac.in">osdadmin@mgcub.ac.in</a></td>
                                        <td>9628203811</td>
                                        <td>
                                            <center><a href="#" class="resume-icon"><i
                                                        class="fa fa-file-pdf-o"></i></a></center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>OSD, Finance</td>
                                        <td>Prof. Vikas Pareek</td>
                                        <td><a href="mailto:osdfinance@mgcub.ac.in">osdfinance@mgcub.ac.in</a></td>
                                        <td>9828373081</td>
                                        <td>
                                            <center><a href="#" class="resume-icon"><i
                                                        class="fa fa-file-pdf-o"></i></a></center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Controller of Examinations</td>
                                        <td>Dr. K.K Upadhyaya</td>
                                        <td><a href="mailto:coe@mgcub.ac.in">coe@mgcub.ac.in</a></td>
                                        <td>07085244579</td>
                                        <td>
                                            <center><a href="#" class="resume-icon"><i
                                                        class="fa fa-file-pdf-o"></i></a></center>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            @include('web.administration')

        </div>
    </div>
</section>

@include('web.layouts.footer')



<script type="text/javascript">
    $(document).ready(function() {
        document.title =
            "Statuary Administrative Officers - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
