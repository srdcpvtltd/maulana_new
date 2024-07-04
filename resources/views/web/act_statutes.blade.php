@include('web.layouts.header')


<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Act & Statutes
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> About</a> <span class="lnr lnr-arrow-right"></span> <a href="act_statutes.php" class="orange-text"> Act & Statutes</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Act & Statutes</span></h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <ul class="custom-list-style">
                            <li class="mb-10"><i class="fa fa-check"></i> <a href="pdf/Central Universities Act 2014.pdf" >CU (Amendment) Act 2014</a></li>
                            <li class="mb-10"><i class="fa fa-check"></i> <a href="pdf/Central Universities Act 2009.pdf" >CU Act 2009</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
    <div class="single-feature">
        <div class="title MGCUB_bg">
            <h4>Quick Links</h4>
        </div>
        <div class="desc-wrap marquee_text">
            <ul class="custom-list-style">
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('about')}}"> History of MGCU</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('missionVision')}}"> Vision & Mission</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href=""> Hon'ble Visitor</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('chancellor')}}"> Chancellor</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('vc')}}"> Vice Chancellor</a></li>
                <hr>
<!--                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="pro_vc.php"> Pro Vice-Chancellor</a></li>
                <hr>-->
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('legacy')}}"> Legacy of Champaran</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('logo')}}"> Logo</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('actStatutes')}}"> Act & Statutes</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('ordinances')}}"> Ordinance</a></li>
            </ul>
        </div>
    </div>
</div>        </div>
    </div>
</section>

 @include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function () {
        document.title = "Act & Statutes - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
