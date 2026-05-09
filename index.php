<?php 
session_start();
error_reporting(0);
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AKS Academy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="abc.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <style type="text/css">
    
    .center  a{
                    width: 30px;
                    height: 30px;
    }
</style>
</head>

<body>
     


    <!-- Navbar Start --> 
    <?php  

     include "code_parts/nav.php";
      ?>
      <!-- Navbar End -->
      <!-- slidebar Start -->
      <?php  

        include "code_parts/slidebar.php";
    ?>

      <!-- slidebar End -->
      
    <!--Navbar & Carousel End -->
   

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    
    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
              

                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <!-- <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Happy Clients</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>-->
                        <img src="img/air_gun.png" alt="" style="width:300px; height:100px; left:45px; bottom:10px; position: relative;"><br>
                        <h5 class="text-white mb-0" style="position:relative; top:50px; right:170px; font-size: 24px; font-weight: bold;">Air Gun</h5>
                    </div> 
                </div>





                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                    <!--<div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Projects Done</h5>
                            <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                        </div> -->
                        <img src="img/Spring.png" alt="" style="width:300px; height:100px; left:45px; bottom:10px; position: relative;"><br>
                        <h5 class="text-primary mb-0" style="position:relative; top:50px; right:170px; font-size:24px; font-weight: bold;">Spring</h5>
                    </div>
                </div>



                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <!-- <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Win Awards</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div> -->
                         <img src="img/walther_kk500.png" alt="" style="width:-100px; height:250px; left:70px; bottom:10px; position: relative;"><br>
                        <h5 class="text-white mb-0" style="position:relative; top:50px; right:160px; font-size: 24px; font-weight: bold;">walther_KK500</h5>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    <!-- Facts Start -->




<!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h1 class="mb-0">Welcome To The Aks Shooting Academy</h1>
                    </div>
                    <h2><font color="#06A3DA">Our Mission :</h2></font>
                    <h5>Our mission is simple yet powerful - to promote responsible firearm ownership, enhance shooting skills, and foster a safe and welcoming community for all shooting enthusiasts. We believe that with the right guidance, training, and practice, anyone can become a confident and proficient shooter while upholding the highest standards of safety.</h5>
                    

<h5>Indeed, it is very hard for shooters to consistently achieve outstanding results during important events, especially over extended periods of time.  

To assist in managing these situations, coaches can help competitive professional shooters by offering some scientific strategies to reach and maintain peak performance[iv].

The aim of this short article is to present ten gold strategies for coaches and shooters to achieve peak performance in all competitions, from national championships to the Olympic Games.</h5>
                    <br><br>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Member Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <!-- <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Read More...</a>-->
                </div> 
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;width:550px;height:50px;"></img>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
                <h1 class="mb-0">We Are Here to Grow Your Focus And Experience</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <img src="img/picture4.png" alt="" style="height:50px;width: 50px;filter: invert(0%) sepia(0%) saturate(0%) hue-rotate(0deg) brightness(1000%) contrast(100%);">
                            </div>
                            <h4>Amazing Experience</h4>
                            <p class="mb-0">It will be a amazing experience to be trained in Aks Academy</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <img height="50px" width="50px" src="img/picture3.png" style="filter: invert(0%) sepia(0%) saturate(0%) hue-rotate(0deg) brightness(1000%) contrast(100%);">
                            </div>
                            <h4>Medals Won</h4>
                            <p class="mb-0">Aks Academy will help you to achieve your dream and medals too</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/blog-1.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <img height="50px" width="50px" src="img/picture2.png" style="filter: invert(0%) sepia(0%) saturate(0%) hue-rotate(0deg) brightness(1000%) contrast(100%);">
                            </div>
                            <h4>Talented Staff</h4>
                            <p class="mb-0">Aks Academy will train you by most talented and friendly staff</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <img height="50px" width="50px" src="img/picture1.png" style="filter: invert(0%) sepia(0%) saturate(0%) hue-rotate(0deg) brightness(1000%) contrast(100%);">
                            </div>
                            <h4>Adventure Zone</h4>
                            <p class="mb-0">It will be a most adventurous journey with Aks Academy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Latest Guns</h5>
                <h1 class="mb-0">Categories Of Our Guns And Rifles</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <!-- <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                            <img src="img/abc.jpg" alt="">
                        
                        </div> -->
                        <!-- <img src="img/abc.jpg" alt="" width="500px"> -->
                        <img src="img/img1.png" alt="" width="300px;" height="160px;">
                        <h4 class="mb-3" style="font-size:40px;">Walther</h4>
                        <p class="m-0" style="top:250px;">The Walther PPK is a classic and iconic handgun known for its compact size and reliability.</p>
                        <!-- <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <!-- <div class="service-icon">
                            <i class="fa fa-chart-pie text-white"></i>
                        </div> -->
                        <img src="img/img2.png" alt="" width="300px;" height="125px;">
                        <h4 class="mb-3" style="font-size:40px;"> Walther LG400</h4>
                        <p class="m-0" style="top:250px;">Walther LG400 is a precision air rifle designed for competitive shooting.</p>
                        <!-- <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <!-- <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div> -->
                        <img src="img/img3.png" alt="" width="300px;" height="200px;">
                        <h4 class="mb-3" style="font-size:40px;">Air Pistol</h4>
                        <p class="m-0">The air pistol gun is a compact and lightweight firearm that utilizes compressed air to propel pellets.</p>
                        <!-- <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <!-- <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div> -->
                        <img src="img/img4.png" alt="" width="320px;" height="250px;">
                        <h4 class="mb-3" style="font-size:40px;">Short Gun</h4>
                        <p class="m-0">The gun has a smoothbore barrel or a series of rifled tubes called "chokes."</p>
                        <!-- <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <!-- <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div> -->
                        <img src="img/picture98.png" alt="" width="300px;" height="160px;">
                        <h4 class="mb-3" style="font-size:40px; top:40%;">Feinwerkbau</h4>
                        <p class="m-0">Feinwerkbau is a German manufacturer of precision air rifles and air pistols.</p>
                        <!-- <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <!-- <div class="service-icon">
                            <i class="fa fa-search text-white"></i>
                        </div> -->
                        <img src="img/img6.png" alt="" width="270px;" height="150px;">
                        <h4 class="mb-3" style="font-size:40px;">Alpha Pistol</h4>
                        <p class="m-0">The Alpha Pistol is a compact, semi-automatic firearm. It boasts a sleek design and lightweight frame.</p>
                        <!-- <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Fees Plans</h5>
                <h1 class="mb-0">We Are Offering Shooters Plan</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Basic Plan</h4>
                            <small class="text-uppercase">For New Shooters</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₹</small>5000<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ 1 Month</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>Range Fees</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Coatching Fees</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Equiment Fees</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <!-- <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-times text-danger pt-1"></i></div> -->
<?php 

if ($_SESSION['role']=="") {
    # code...
    echo('<a href="../RSMS_Project/Login/login.php" class="btn btn-primary py-2 px-4 mt-4">Join Now</a>');
}

 ?>







                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Standard Plan</h4>
                            <small class="text-uppercase">For Ciniear Shooters</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₹</small>31000<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ 3 Month</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>Range Fees</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Coatching Fees</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Equiment Fees</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <!-- <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-times text-danger pt-1"></i></div> -->


<?php 

if ($_SESSION['role']=="") {
    # code...
    echo('<a href="../RSMS_Project/Login/login.php" class="btn btn-primary py-2 px-4 mt-4">Join Now</a>');
}

 ?>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Advanced Plan</h4>
                            <small class="text-uppercase">For National Shooters</small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₹</small>1,15,000<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/1 Year</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>Range Fees</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Coatching Fees</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Equiment Fees</span><i class="fa fa-times text-danger pt-1"></i></div>
                            <!-- <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-check text-primary pt-1"></i></div> -->



                         <?php 

if ($_SESSION['role']=="") {
    # code...
    echo('<a href="../RSMS_Project/Login/login.php" class="btn btn-primary py-2 px-4 mt-4">Join Now</a>');
}

 ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->




    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0">Our Team Work For Academy</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/img3.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Arun Sharma</h4>
                            <small class="text-uppercase">Head-Coach</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam

                        <center class="center" style="position: absolute; bottom: 10px; left:30%; bottom: 33px;">
                            <a class="btn btn-primary btn-square me-0 " href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-0" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-0" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-0" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </center>
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/img91.png" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Sonal Sharma</h4>
                            <small class="text-uppercase">Junior-Coatch</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                       Sonal Sharma Completd M-Field Economics,Coach Course In Deploma And 8 Time National Completed.2 Years Coaching Experience.

                       <center class="center" style="position: absolute; bottom: 10px; left:30%; bottom: 33px;">
                            <a class="btn btn-primary btn-square me-0 " href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-0" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-0" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-0" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </center>
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/img11.jpeg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Dhruvi Prabtani</h4>
                            <small class="text-uppercase">Trainner New Shooters</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dhruvi Prabtami Is 3 Time National Player,Inter University Gold Medalist,National University Games Compelete And 6 Month Coaching Experience. 

                        <center class="center" style="position: absolute; bottom: 10px; left:30%; bottom: 33px;">
                            <a class="btn btn-primary btn-square me-0 " href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-0" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-0" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-0" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </center>
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/img51.png" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Arjun Gid</h4>
                            <small class="text-uppercase">Management Of Academy</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5" style="position: relative;">
                        Arjun Gid is Management Assistance,2 Time National Completed,Diploma Management Course Competed And 6 Month Management Experience.


                        <center class="center" style="position: absolute; bottom: 10px; left:30%;">
                            <a class="btn btn-primary btn-square me-0 " href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-0" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-0" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-primary btn-square me-0" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
<!--     <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


       <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Shooting Videos</h5>
                <h1 class="mb-0">Latest Video From Our Academy</h1>
            </div>
            <div class="row g-5">
                



                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img src="img/pic1.jpg" style="width:100%;height: 250px;">
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>

                            <a class="popup-vimeo" href="xyz.mp4">    <h4 class="mb-3">How to build a website</h4></a>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <!-- <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img src="img/pic2.jpg" style="width:100%;height: 250px;">
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>

                            <a class="popup-vimeo" href="xyz.mp4">    <h4 class="mb-3">How to build a website</h4></a>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <!-- <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img src="img/pic3.jpeg" style="width:100%;height: 250px;">
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>

                            <a class="popup-vimeo" href="xyz.mp4">    <h4 class="mb-3">How to build a website</h4></a>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <!-- <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>


                
            </div>
        </div>
    </div>
    <!-- Blog Start -->


    <!-- Vendor Start -->
    <!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor-1.jpg" alt="">
                    <img src="img/vendor-2.jpg" alt="">
                    <img src="img/vendor-3.jpg" alt="">
                    <img src="img/vendor-4.jpg" alt="">
                    <img src="img/vendor-5.jpg" alt="">
                    <img src="img/vendor-6.jpg" alt="">
                    <img src="img/vendor-7.jpg" alt="">
                    <img src="img/vendor-8.jpg" alt="">
                    <img src="img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Vendor End -->
    

    <!-- Footer Start -->
    <?php  

        include "code_parts/footer.php";
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js">
        
    </script>

</body>

</html>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<script>
$(function() {
    $('.popup-youtube, .popup-vimeo').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});
</script>