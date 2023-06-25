
  <!--event_news_slider_-php----------------------------------------------------->
  <?php
   include 'dbcon.php';

   if (isset($_POST['submit'])) {
    
    //fetching text variables
    $org_name = $_POST['org_name'];
    $event_name = $_POST['event_name'];
    $event_desc = $_POST['event_desc'];
    $desg_one = $_POST['desg_one'];
    $desg_person_one = $_POST['desg_person_one'];
    $desg_two = $_POST['desg_two'];
    $desg_person_two = $_POST['desg_person_two'];
    $validity_days = $_POST['validity_days'];
    

    // HANDLING SIGNATURE FILES ---------

    //fetching uploaded files name
    $desg_one_filename = $_FILES["desg_person_one_sign"]["name"];
    //fetching uploaded temperory file address
    $desg_one_tmpname = $_FILES["desg_person_one_sign"]["tmp_name"];
    //File size
    $desg_one_size = $_FILES["desg_person_one_sign"]["size"];
    //putting the address on which we wanted to put our image
    $desg_one_folder = "certificate-generation/certificate-generation/".$desg_one_filename;
    $desg_one_folder_exe = $desg_one_filename;
    //moving image from temperory file to the file which we puted
    move_uploaded_file($desg_one_tmpname,$desg_one_folder);

    //fetching uploaded files name
    $desg_two_filename = $_FILES["desg_person_two_sign"]["name"];
    //fetching uploaded temperory file address
    $desg_two_tmpname = $_FILES["desg_person_two_sign"]["tmp_name"];
    //File size
    $desg_two_size = $_FILES["desg_person_two_sign"]["size"];
    //putting the address on which we wanted to put our image
    $desg_two_folder = "certificate-generation/certificate-generation/".$desg_two_filename;
    $desg_two_folder_exe = $desg_two_filename;
    //moving image from temperory file to the file which we puted
    move_uploaded_file($desg_two_tmpname,$desg_two_folder);

    // HANDLING ORG LOGO FILES ---------

    //fetching uploaded files name
    $org_logo_filename = $_FILES["org_logo"]["name"];
    //fetching uploaded temperory file address
    $org_logo_tmpname = $_FILES["org_logo"]["tmp_name"];
    //File size
    $org_logo_size = $_FILES["org_logo"]["size"];
    //putting the address on which we wanted to put our image
    $org_logo_folder = "certificate-generation/certificate-generation/".$org_logo_filename;
    $org_logo_folder_exe = $org_logo_filename;
    //moving image from temperory file to the file which we puted
    move_uploaded_file($org_logo_tmpname,$org_logo_folder);
    


    //INSERTING ABOVE DATA TO DB -----
    $insertquery = "INSERT INTO `events`(`org_name`,`event_title`, `event_desc`, `design_one`, `design_person_one`, `design_person_one_sign`, `design_two`, `design_person_two`, `design_person_two_sign`, `org_logo_png`, `validity_days`) VALUES ('$org_name','$event_name','$event_desc','$desg_one','$desg_person_one','$desg_one_folder_exe','$desg_two','$desg_person_two','$desg_two_folder_exe','$org_logo_folder_exe','$validity_days')";

    
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
      echo "<script> window.location.href = 'AdminDashboard.php'; </script>";
    }
   }

  ?>
