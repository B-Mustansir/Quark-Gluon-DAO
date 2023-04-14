<?php

    $server = "localhost";
    $user = "root";
    $password = "" ;
    $db = "quark_hackathon" ;

    $con = mysqli_connect($server,$user,$password,$db);

    if(!$con){
      ?>
      <script>
          alert("Connection Failed !");
      </script>
      <?php
    }
    mysqli_set_charset($con,"utf8mb4")
?>
