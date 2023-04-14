
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

    // CALLING PYTHON FILE
    // Replace the path with the path to your Python script
    // $arg1 = 'Pranav';
    // $arg2 = 'world';

    // Fetching event details from events table
    $selectquery = "SELECT * FROM events WHERE id = '$event_id'";

    $query = mysqli_query($con,$selectquery);

    while ($sel_res = mysqli_fetch_array($query)) {
    
    $event_desc = $sel_res['event_desc'];
    $design_one =  $sel_res['design_one'];
    $design_one_person = $sel_res['design_person_one'];
    $design_one_person_sign = $sel_res['design_person_one_sign'];
    $design_two =  $sel_res['design_two'];
    $design_two_person = $sel_res['design_person_two'];
    $design_two_person_sign = $sel_res['design_person_two_sign'];
    $org_logo_png = $sel_res['org_logo_png'];

    // $command = "python C:/xampp/htdocs/Quark/Hackathon/certificate-generation/certificate-generation/main.py $cand_name $event_desc $design_one $design_one_person $design_one_person_sign $design_two $design_two_person $design_two_person_sign $org_logo_png";
    
    $command = "python C:/xampp/htdocs/Quark/Hackathon/certificate-generation/certificate-generation/main.py $cand_name $event_desc $org_logo_png $design_one_person_sign $design_two_person_sign $design_one $design_one_person $design_two_person $design_two";
    

    // Execute the command and capture the output
    $output = shell_exec($command);

    echo $output;
    }
    

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
