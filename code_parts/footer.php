     <!-- Footer Start -->
     <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white" style="left:40px;position:relative;"><img rel="stylesheet" src="abc.jpg" style="border-radius:30px;width:40px;height:40px;left:-50px;position:absolute;">AKS Academy</h1>
                        </a>
                        <h4 class="mt-3 mb-4" style="color:#fff;">“ A Rifle Is Freedom To Shoot , But With Responsibility ”</h4>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark"><a href="Registration\reg.php">Sign Up</a></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">16B Vikramnagar, Ghetiring Road, Palitana</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">aks@gmail.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+919543640760</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="index.php?status=index"><i class="bi bi-arrow-right text-primary me-2 <?php
                                        error_reporting(0);
                                        if ($_GET['status']=='index')
                                        {
                                            echo'active';
                                        }
                                        if ($_GET['status']=='')
                                        {
                                            echo 'active';
                                        }

                                    ?>"></i>Home</a>
                                <a class="text-light mb-2" href="about.php?status=About_Us"><i class="bi bi-arrow-right text-primary me-2
                                    <?php
                                        error_reporting(0);
                                        if ($_GET['status']=='About_Us')
                                        {
                                            echo'active';
                                        }
                                    ?>
                                    "></i>About Us</a>
                                <a class="text-light mb-2" href="classes.php?status=Classes"><i class="bi bi-arrow-right text-primary me-2
                                    <?php
                                        error_reporting(0);
                                        if ($_GET['status']=='Classes') 
                                        {
                                            echo'active';
                                        }
                                    ?>
                                    "></i>Classes</a>
                                    <a class="text-light mb-2" href="news.php?status=News"><i class="bi bi-arrow-right text-primary me-2
                                     <?php
                                        error_reporting(0);
                                        if ($_GET['status']=='News')
                                        {
                                            echo'active';
                                        }
                                    ?>
                                    "></i>News</a>
                                    <a class="text-light mb-2" href="activity.php?status=Activity"><i class="bi bi-arrow-right text-primary me-2
                                     <?php
                                        error_reporting(0);
                                        if ($_GET['status']=='Activity')
                                        {
                                            echo'active';
                                        }
                                    ?>
                                    "></i>Activity</a>
                                <!-- <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a> -->
                                <a class="text-light" href="contact.php?status=Contact_Us"><i class="bi bi-arrow-right text-primary me-2
                                        <?php
                                        error_reporting(0);
                                        if ($_GET['status']=='Contact_Us') 
                                        {
                                            echo'active';
                                        }
                                    ?>
                                    "></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Popular Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="index.php?status=index"><i class="bi bi-arrow-right text-primary me-2
                                        <?php
                                        error_reporting(0);
                                        if ($_GET['status']=='index')
                                        {
                                            echo'active';
                                        }
                                        if ($_GET['status']=='')
                                        {
                                            echo 'active';
                                        }

                                    ?>
                                    "></i>Home</a>
                                <a class="text-light mb-2" href="about.php?status=About_Us"><i class="bi bi-arrow-right text-primary me-2
                                    <?php
                                        error_reporting(0);
                                        if ($_GET['status']=='About_Us')
                                        {
                                            echo'active';
                                        }
                                    ?>
                                    "></i>About Us</a>
                                <a class="text-light mb-2" href="champions.php?status=Awards"><i class="bi bi-arrow-right text-primary me-2
                                    <?php
                                        error_reporting(0);
                                        if ($_GET['status']=='Awards')
                                        {
                                            echo'active';
                                        }
                                    ?>
                                    "></i>Awards</a>
                                <a class="text-light mb-2" href="medal.php?status=Medal"><i class="bi bi-arrow-right text-primary me-2
                                     <?php
                                        error_reporting(0);
                                        if ($_GET['status']=='Medal')
                                        {
                                            echo'active';
                                        }
                                    ?>
                                    "></i>Medals</a>
                                    <a class="text-light mb-2" href="news.php?status=News"><i class="bi bi-arrow-right text-primary me-2
                                     <?php
                                        error_reporting(0);
                                        if ($_GET['status']=='News')
                                        {
                                            echo'active';
                                        }
                                    ?>
                                    "></i>News</a>
                                    <a class="text-light mb-2" href="activity.php?status=Activity"><i class="bi bi-arrow-right text-primary me-2
                                     <?php
                                        error_reporting(0);
                                        if ($_GET['status']=='Activity')
                                        {
                                            echo'active';
                                        }
                                    ?>
                                    "></i>Activity</a>
                                <!-- <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a> -->
                                <a class="text-light" href="contact.php?status=Contact_Us"><i class="bi bi-arrow-right text-primary me-2
                                        <?php
                                        error_reporting(0);
                                        if ($_GET['status']=='Contact_Us')
                                        {
                                            echo'active';
                                        }
                                    ?>
                                    "></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#"></a> 
						
						 <!-- <a class="text-white border-bottom" href="#">Copy Right By Vishakha Parmar And Hetal Parmar</a></p> -->
                         <a class="text-white border-bottom" href="#">Copy Right By Vishakha Parmar And Hetal Parmar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Footer End -->