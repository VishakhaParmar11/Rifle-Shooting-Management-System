<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>AKS Academy</title>
  <link rel="stylesheet" href="./style.css">
  <style type="text/css">
    
  </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
    <div class="container">
      <div class="inner-wrapper">
        
          <?php
              include("../code_parts/connection.php");
              $sql="SELECT * FROM `tbl_activity`";
              $qry=mysqli_query($con,$sql);
              while ($row=mysqli_fetch_assoc($qry)) 
              {
                echo'  <div class="card">
          <div class="inner-card">
            <div class="img-wrapper">
              <img src="../admin/'.$row['activity_photo'].'" alt="">
            </div>
            <div class="content">
              <h1>'.$row['title_of_activity'].'</h1>
              <p>'.$row['activity_desc'].'</p>
            </div>
            <div class="btn-wrapper">
              <button class="view-btn" data-src="https://source.unsplash.com/collection/190727/900x600">'.$row['post_date'].'</button>
            </div>
          </div>
      </div>
';
           }
          ?>
      

        
      </div>
    </div>
  </div>

  <div class="light-box">
    <div class="box-wrapper">
      <div class="box">
        <span class="close-btn">&times</span>
        <img src="" alt="" class="light-img">
      </div>
    </div>
  </div>

  <!-- pagination -->

    

  <!-- pagination -->

<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
