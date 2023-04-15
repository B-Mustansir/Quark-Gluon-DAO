
  <!--event_news_slider_-php----------------------------------------------------->
  <?php
   include 'dbcon.php';

   if (isset($_POST['submit'])) {
     //fetching uploaded files name
     $user_name = $_POST['logname'];
     $user_email = $_POST['logemail'];
     $user_pass = $_POST['logpass'];

     // password encryption
     $user_enc_pass = md5($user_pass);

     //inserting query
     $insertquery = "INSERT INTO `admin_users`(`name`, `email`, `password`)
      VALUES ('$user_name','$user_email','$user_enc_pass')";

     //firing the $query
     $res = mysqli_query($con,$insertquery);

     if(!$res){
       ?>
       <script type="text/javascript">
         alert('Data inserted not Successful !');
       </script>
       <?php

     }
     else {
       echo "<script> window.location.href = 'index.php'; </script>";
     }
   }

  ?>
