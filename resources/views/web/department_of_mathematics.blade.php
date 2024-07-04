<?php $this->load->view("frontend/header.php");?>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Department of Mathematics
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> Academics</a> <span class="lnr lnr-arrow-right"></span> <a href="school_of_physical_sciences.php">School of Physical Sciences</a><span class="lnr lnr-arrow-right"></span> <a class="orange-text">Department of Mathematics</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Department of </span> Mathematics</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <h4 class="inner-title">About Department</h4>
                        <p class="text-justify">The Department of Mathematics started functioning in 2016 with the establishment of the University. At present, there are 5 faculty members (1 Associate Professor and 4 Assistant Professors) in the department who are passionate about their teaching and research. The faculty members specialized in most areas of pure and applied mathematics, including Algebra, Wavelet Analysis, Distribution Theory, Integral Transforms, Topology/Fuzzy Topology, Category Theory, Fuzzy Set Theory, Fuzzy Optimization, Computational & Theoretical Fluid Dynamics and Mathematical Modelling. The Department offers Post-Graduate Programme M.A./M.Sc. in Mathematics with several specializations. The courses have been designed in such a way that they will provide a strong base towards research and teaching in advanced areas of Mathematics. The Department also offers M.Phil. and Ph.D. Programme in various areas of pure and applied Mathematics.</p>
                        
                    </div>
                </div>               
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
    <div class="nav-side-menu">
        <div class="brand">About Department</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li><a href="school_of_physical_sciences.php"><i class="fa fa-arrow-circle-right"></i> Back to School Page </a></li>
                <li><a href="department_of_mathematics_hod.php"><i class="fa fa-arrow-circle-right"></i> Head of Department</a></li>
                <li><a href="department_of_mathematics_programme.php"><i class="fa fa-arrow-circle-right"></i> Programmes</a></li>
                <li><a href="javascript:;" onclick="viewFun()"><i class="fa fa-arrow-circle-right"></i> Syllabus</a></li>
                <li><a href="department_of_mathematics_faculty.php"><i class="fa fa-arrow-circle-right"></i> Faculty Details</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Achievements/Events</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Research/Publications</a></li>
                <li><a href="department_of_mathematics_contact.php"><i class="fa fa-arrow-circle-right"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
<form id="frm" method="post" action="syllabus_view.php"><input type="hidden" name="ids" value="14" /><button type="submit" style="display: none;"></button></form>
<script>
    function viewFun() {
        $('#frm').submit();
    }
</script>        </div>
    </div>
</section>

 <?php $this->load->view("frontend/footer.php");?>


<script type="text/javascript">
    $(document).ready(function () {
        document.title = "Department of Mathematics - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>