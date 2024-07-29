@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    University Faculties
                </h1>
                <p class="text-white link-nav"><a href="">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href=""> Academics</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">Facalites
                        University</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container-fluid bg-light-grey">
        <div class="container search-light-cont">
            <div class="row search-light-bg-head">
                <div class="page-title">
                    <h2><span>Faculty of</span>( {{ $viewfaculties->first()->name ?? 'No Data Found' }} )</h2>
                </div>
            </div>
            <div class="row mt-3">
                @foreach ($viewfaculties as $faculties)
                    <div class="col-lg-3 mb-3">
                        <div class="card card-depart">
                            <div class="card-body depart">
                                <a class="link-subset">
                                    <div class="card-depart-icon mb-2" style="font-size: 25px">
                                        {!! $faculties->icon !!}
                                    </div>
                                </a>
                                <a class="link-subset">
                                    <h5 class="card-title"> {{ $faculties->name }} </h5>
                                </a>
                                <a href="tel:011-24111141" class="link-subset">
                                    <div class="card-phone" style="font-size: 18px">
                                        <i class="fa fa-phone"></i>
                                        {{ $faculties->phone }}
                                    </div>
                                </a>
                                <a href="mailto:adminblock@du.ac.in" target="blank" class="link-subset"
                                    style="font-size: 18px">
                                    <div class="card-email mb-3">
                                        <i class="fa fa-envelope"></i>
                                        {{ $faculties->email }}<br />
                                    </div>
                                </a>
                                <a href=" {{ route('faculty.team', $faculties->id) }} "
                                    class="btn btn-outline-primary light-purple">View
                                    Department</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@include('web.layouts.footer')
