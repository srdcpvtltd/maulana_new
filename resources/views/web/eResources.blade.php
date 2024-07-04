<?php $this->load->view("frontend/header.php");?>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white" style="text-transform: unset;">
                eResources
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a class="orange-text">eResources : An ICT initiative for E-learning</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <div class="page-title">
                    <h2 style="text-transform: unset;"><span>eResources: </span>An ICT initiative for E-learning</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">                        
                        <div class="row">
                            <div class="col-md-1">
                                <a href="https://www.youtube.com/channel/UCX35-ZgGBrtFKwZ131_Su1Q/videos" ><img src="<?php echo base_url(); ?>images/youtube.png" alt="youtube"></a>
                            </div>
                            <div class="col-md-11">
                                <p class="text-justify"><strong class="orange-text">Online Video lectures:</strong> lectures: An Online lecture series by eminent speakers of the University. See MGCU’s YouTube channel for video lecture. <a href="https://www.youtube.com/channel/UCX35-ZgGBrtFKwZ131_Su1Q/videos"  style="text-decoration: underline;">Youtube Link</a></p>
                            </div>
                             <div class="col-md-1">
                                 <a href="elerning.php"><img src="<?php echo base_url(); ?>images/PowerPoint-icon.png"></a>
                            </div>
                            <div class="col-md-11">
                                <p class="text-justify"><strong class="orange-text">PPT Presentation of Faculties:</strong> Faculties: PowerPoint can be a highly effective tool to aid learning. Department wise PPTs submitted by faculties on relevant topics related their subject has been uploaded. <a href="elerning.php" class="round-rectangle">View More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </div>
</section>



 <?php $this->load->view("frontend/footer.php");?>


 <script type="text/javascript">
    $(document).ready(function () {
        document.title = "eResources : An ICT initiative for E-learning- Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
