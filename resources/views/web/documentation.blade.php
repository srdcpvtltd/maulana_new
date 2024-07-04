<?php $this->load->view("frontend/header.php");?>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Documentation
                </h1>
                <p class="text-white link-nav">
                    <a href="index.php">Home </a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a href=""> Publication</a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a class="orange-text">Documentation</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area event-page-lists">
    <img src="<?php echo base_url(); ?>images/documentation.png"  alt="Documentation" class="img img-responsive" style="width: 100%;">
    <div class="container mt-60">        
        <div class="row">
            <div class="col-sm-1 col-md-1 col-xs-1"></div>
            <div class="col-sm-3 col-md-3 col-xs-3">
                <ul>
                    <li class=""><a href="pdf/MGCU-in-Covid-19.pdf" class="btn documentation_btn documentation_btn1 mb-40">MGCU in COVID-19</a></li>
                    <li class=""><a href="pdf/MGCU at सार्थक EDUVISION 2021- exhibition and conference for Aatmanirbhar Bharat.pdf" class="btn documentation_btn documentation_btn2  mb-40">सार्थक EDUVISION 2021</a></li>
                    <li class=""><a href="#" class="btn documentation_btn documentation_btn3  mb-40">Marchiga Ahead</a></li>
                    <li class=""><a href="#" class="btn documentation_btn documentation_btn4">Towards Growths Flourishment</a></li>
                </ul>                
            </div>
            <div class="col-sm-8 col-md-8 col-xs-8">
                <img src="images/search_files.png" alt="Documentation" class="img img-responsive float-right" style="opacity: 0.5">
            </div>
        </div>
    </div>
    <img src="<?php echo base_url(); ?>images/documentation1.png"  alt="Annual Magazine" class="img img-responsive" style="width: 100%;">
</section>



 <?php $this->load->view("frontend/footer.php");?>


 <script type="text/javascript">
    $(document).ready(function () {
        document.title = "Documentation - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
