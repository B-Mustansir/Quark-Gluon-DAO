
  <!--event_news_slider_-php----------------------------------------------------->
  <?php
   include 'dbcon.php';

   if (isset($_POST['submit'])) {
    
    //fetching text variables
    $cand_name = $_POST['cand_name'];
    $public_id = $_POST['public_id'];
    $event_id = $_POST['event_id'];
    
    //INSERTING ABOVE DATA TO DB -----
    $insertquery = "INSERT INTO `issued_certificates`(`candidate_name`, `candidate_public_id`, `event_id`) VALUES ('$cand_name','$public_id','$event_id')";

    //firing the $query
    $res = mysqli_query($con,$insertquery);

    echo "hi";

    if(!$res){
      ?>
      <script type="text/javascript">
        alert('Data inserted not Successful !');
      </script>
      <?php
    }
    else {
      echo "<script> window.location.href = 'AdminDashboard.php'; </script>";
    }
   }

  ?>
