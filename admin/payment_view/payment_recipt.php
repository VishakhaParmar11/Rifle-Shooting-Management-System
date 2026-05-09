<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">

    
  <title>AKS Academy</title>
  <?php
    session_start();
    include("../code_part/connection.php");
    $gmail=$_GET['gmail'];
    $sql="SELECT * FROM `tbl_registration` where `email` = '$gmail'";
    
    $run=mysqli_query($con,$sql);
    
    $row=mysqli_fetch_assoc($run);


     $sql_buy="UPDATE `tbl_paymant` SET `status` = 'success' WHERE `tbl_paymant`.`user_gmail` = '$gmail';";

     $sql_run=mysqli_query($con,$sql_buy);

    
  ?>
   
<style type="text/css">
  

  body {
  display: grid;
  place-content: center;
  height: 100vh;
  background-color: #06a3da;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-family: -apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
}

h1,
p {
  animation: translate-y-100 400ms cubic-bezier(0.1, 0.2, 0.2, 1.4) forwards;
  opacity: 0;
}

h1 {
  margin-top: 0;
  margin-bottom: 0.5rem;
  font-size: 24px;
  animation-delay: 1100ms;
}

p {
  margin-top: 0;
  font-size: 13px;
  color: #999999;
  animation-delay: 1150ms;
}

.cta-row {
  display: flex;
  justify-content: space-between;
  gap: 1rem;
  width: 100%;
  animation: translate-y-100 400ms 1200ms cubic-bezier(0.1, 0.2, 0.2, 1.4)
    forwards;
  opacity: 0;
}

button {
  display: grid;
  flex-grow: 1;
  align-items: center;
  padding: 0.75rem 1rem;
  background-color: #06a3da;
  border-width: 0;
  border-radius: 5px;
  cursor: pointer;
  color: #ffffff;
  font-size: 12px;
  font-weight: 600;
  line-height: 1.5;
  transition: 200ms cubic-bezier(0.15, 0.65, 0.36, 1);
}
button:hover,
button:focus {
  background-color: #fff;
  color: #06a3da;
  border: 2px solid #06a3da;
}
button:active {
  transform: scale(0.97);
}

button.outline {
  border: 2px solid #06a3da;
  background-color: transparent;
  color: #06a3da;
}

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 400px;
  padding: 1.5rem;
  background-color: #ffffff;
  border-radius: 5px;
}

/*
Apply left & right only box-shadow to a psuedo element using clip-path.

We cannot apply this to parent directly as clip-path clips the dashed border.

Only the last card should have a bottom-facing box-shadow.
*/
.card:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.01), 0 2px 4px rgba(0, 0, 0, 0.02);
  border-radius: 5px;
  clip-path: inset(0px -4px 0px -4px);
}
.card:nth-of-type(3):before {
  clip-path: inset(0px -4px -4px -4px);
}

.card:first-of-type {
  animation: translate-y-100 300ms 1000ms cubic-bezier(0.1, 0.2, 0.2, 1.4)
    forwards;
  opacity: 0;
  z-index: 0;
}

.card .icon {
  width: 64px;
  height: 64px;
  border: 2px solid #ffffff;
  border-radius: 9999px;
  background: linear-gradient(to top, #f2f2f280, #e0e0e080);
  box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.06) inset;
  display: grid;
  place-content: center;
  margin-bottom: 1rem;
}

.card .icon:before {
  content: "\2713";
  display: grid;
  place-items: center;
  width: 56px;
  height: 56px;
  border-radius: 9999px;
  background-color: #ffffff;
  box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.03);
  font-family: "arial";
  font-size: 32px;
  color: #4caf50;
}

.card:not(:first-of-type) {
  transform-origin: top;
  animation: unfold 500ms 1700ms cubic-bezier(0.3, 0.1, 0, 1.2) forwards;
  -webkit-transform: perspective(500px) rotateX(-0.25turn);
  z-index: 1;
  opacity: 0.9;
}
.card:nth-of-type(3) {
  animation-delay: 1950ms;
  animation-timing-function: cubic-bezier(0.2, 0.1, 0, 1.4);
  z-index: 2;
}

/*
Use a pseudo element for dashed line.

A border-top applied to parent would curve due to border-radius.
*/
.card:not(:first-of-type):after {
  position: absolute;
  top: -0.5px;
  left: 1%;
  content: "";
  width: 98%;
  height: 1px;
  border-top: 1px #f2f2f2 dashed;
}

ul {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
  margin: 0;
  padding: 0;
  width: 100%;
}
ul > li {
  width: 100%;
  display: flex;
  justify-content: space-between;
}
ul > li span {
  font-size: 12px;
  font-weight: 500;
  color: #212121;
}
ul > li span:first-of-type {
  color: #757575;
}

/* Animations */
@keyframes translate-y-100 {
  0% {
    transform: scale(0.9) translateY(0.5rem);
  }
  100% {
    opacity: 1;
  }
}

@keyframes unfold {
  to {
    transform: none;
    opacity: 1;
  }
}
</style>

  <link rel="icon" href="abc.jpg">
</head>
<body>
<!-- partial:index.partial.html -->
<!-- Reciept top-half -->
<div class="card">
  <div class="icon">
  </div>
  <h1>
    Payment Recipt
  </h1>
  <p>
    Your Payment is Successfully Payed.
  </p>
</div>
<!-- Reciept bottom-half -->
<div class="card">
  <ul>
    <li>
      <span>Username </span>
      <span><?php   echo $row['username']; ?></span>
    </li>
    <li>
      <span>Mobile No</span>
      <span><?php   echo $row['phone_no']; ?></span>
    </li>
    <li>
      <span>Email</span>
      <span><?php   echo $row['email']; ?></span>
    </li>
    <li>
      <span>Payed Date</span>
      <span><?php   echo $row['post_date']; ?></span>
    </li>
    <li>
      <span>Amount</span>
      <span><?php   echo $row['fees'] ?></span>
    </li>
  </ul>
</div>
<!-- Reciept CTA -->
<div class="card">
  <div class="cta-row">
    <button>
      <a href="../../index.php" style="text-decoration: none;text-decoration-color: white;color: white;">Back To Site</a>
    </button>
    <button onclick="window.print()">
      Print 
    </button>
  </div>
</div>
<!-- partial -->
  
</body>
</html>
