<?php
    include("../Registration/code_part/logo.php");
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>AKS Academy</title>
  <link rel="stylesheet" href="./style.css">
 
</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AKS Academy</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="shortcut icon" type="image/x-icon" href="../admin/images/abc.jpg">
    <body>
        <div class="container">
            <header>Registration Form</header>
            <div class="progress-bar">
               

                <div class="step">
                    <p>Details</p>
                    <div class="bullet">
                        <span>1</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>



                <div class="step">
                    <p>Contact</p>
                    <div class="bullet">
                        <span>2</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>

                <div class="step">
                    <p>Physical</p>
                    <div class="bullet">
                        <span>3</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>


                <div class="step">
                    <p>Criteria</p>
                    <div class="bullet">
                        <span>4</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>


                <div class="step">
                    <p>Password</p>
                    <div class="bullet">
                        <span>5</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>


                 <!-- <div class="step">
                    <p>Payment</p>
                    <div class="bullet">
                        <span>6</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div> -->
            </div>
 

 <link rel="shortcut icon" type="image/x-icon" href="../admin/images/abc.jpg"> 

            <div class="form-outer">
                <form action="payment/payment.php" method="post" enctype="multipart/form-data">
                   


                    <div class="page slide-page">
                        <div class="title">Basic Info:</div>
                        <div class="field">
                            <div class="label">UserName</div>
                            <input type="text" name="name"  required />
                        </div>
                        <div class="field">
                            <div class="label">Gender</div>
                                <select  name="gn" required />
                                <option hidden>Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                            
                            
                        </div>



                        <div class="field">
                            <div class="label">DOB</div>
                            <input type="date" name="dob" required  />
                        </div>

                        <div class="field">
                            <div class="label">File Upload</div>
                            <input type="file" name="photo"  required />
                        </div>
                        <div class="field">
                            <button class="firstNext next">Next</button>
                        </div>
                    </div>






                    <div class="page">
                        <div class="title">Contact Info:</div>
                        <div class="field">
                            <div class="label">Address</div>
                            <input type="text" name="address" required  />
                        </div>
                        <div class="field">
                            <div class="label">Phone Number</div>
                            <input type="text" name="mobile" maxlength="10" minlength="10"   required />
                        </div>
                        <div class="field">
                            <div class="label">Email</div>
                            <input type="email" name="email"  required />
                        </div>
                        <div class="field btns">
                            <button class="prev-1 prev">Previous</button>
                            <button class="next-1 next">Next</button>
                        </div>
                    </div>





                    <div class="page">
                                <div class="title">Physical Details</div>
                                                
                     <div class="field">
                            <div class="label">Height</div>
                            <input type="Number" name="height"  required />
                        </div>

                        <div class="field">
                            <div class="label">Weight</div>
                            <input type="Number" name="weight"  required />
                        </div>


                        <div class="field">
                            <div class="label">Age</div>
                            <input type="Number" name="age"  required />
                        </div>


                        <div class="field btns">
                            <button class="prev-2 prev">Previous</button>
                            <button class="next-2 next">Next</button>
                        </div>
                    </div>




                    <div class="page">
                        <div class="title">Criteria Details</div>
                        <div class="field">
                            <div class="label">Gun Selection</div>
                            <select  name="gun_selection" required />
                                <option hidden>Select Criteria</option>
                                <option>Walther</option>
                                <option>Air Pistol</option>
                                <option>Short Gun</option>
                                <option>Alpha Pistol</option>
                                <option>Walther LG400</option>
                            </select>
                           
                        </div>
                        <div class="field">
                            <div class="label">Hand Selection</div>
                         <select  name="hand_selection" required />
                                <option hidden>Hand Criteria</option>
                                <option>Righty</option>
                                <option>Lefty</option>
                            </select>
                        </div>   
                        <div class="field">
                            <div class="label">Fees</div>
                         <select  name="amount"  required />
                                <option hidden>--Fees--</option>
                                <option>5000</option>
                                <option>10000</option>
                                <option>15000</option>
                            </select>
                        </div>                       
                         <div class="field btns">
                            <button class="prev-3 prev">Previous</button>
                            <button class="next-3 next">Next</button>
                        </div>
                    </div>

                    <div class="page">
                        <div class="title">Set Password</div>
                        <div class="field">
                            <div class="label">Password</div>
                            <input type="password" name="pass" maxlength="12" minlength="8" required />
                        </div>
                         <div class="field">
                            <div class="label">Confirm Password</div>
                            <input type="password" name="c_pass" maxlength="12" minlength="8" required />
                        </div>

                        <div class="field btns">
                            <button class="prev-5 prev">Previous</button>
                            <button class="submit" name="submit">Submit</button>
                        </div>
                    </div>





                    <!-- <div class="page">
                        div class="title">Payment Details:</div>
                        <div class="field">
                            <div class="label">Card Holder Name:</div>
                            <input type="text" name="card_holder"  required />
                        </div>
                        <div class="field">
                            <div class="label">CVC</div>
                            <input type="password" name="cvc" maxlength="4" minlength="3"  required />
                        </div>
                         <div class="field">
                            <div class="label">Expierty Date:</div>
                            <input type="date" name="exp_date"  required />
                        </div>
                         <div class="field" id="div_hide" style="display: none;">
                            <div class="label">Enter OTP:</div>
                            <input type="password" name="otp" />
                        </div>
                        <div class="field btns">
                            <button class="prev-5 prev">Previous</button>
                             
                            <button class="submit" name="submit">Submit</button>
                        </div>
                    </div> -->

<script type="text/javascript">
    
    function otp(){
      var div_hide=document.querySelector("#div_hide");
     // element.classList.remove("mystyle");
      div_hide.style="display:bloack;";
    }
</script>



         </form>
            </div>
        </div>

         <link rel="shortcut icon" type="image/x-icon" href="../admin/images/abc.jpg">
        <script src="script.js"></script>
    </body>
</html>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
  <link rel="shortcut icon" type="image/x-icon" href="../admin/images/abc.jpg">