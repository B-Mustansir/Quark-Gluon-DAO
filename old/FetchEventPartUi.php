<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Quark Gluon Dao</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,500,500i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'>
  <link rel="stylesheet" href="./style.css">
  <script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js" type="application/javascript"></script>

</head>

<body>

  <!-- 
    ADMIN_USER FILEDS:
    event_title
    name
    desc
    designation 1
    designation 2
    designation person name 1
    designation person name 2
    desgination sign Png 1
    desgination sign Png 2
    org_logo
    org_name
    expiration_date (no-of-days)
    public id
  -->

  <?php
  
  include 'dbcon.php';

    // Fetch data from database table based on combo box selection
    if (isset($_POST['select_option'])) {
        $selected_option = $_POST['select_option'];
        $sql = "SELECT * FROM issued_certificates WHERE id = $selected_option";
        $result = mysqli_query($con, $sql);
    }

    ?>
    
    <form action="">

    </form>
    
    <?php

  ?>

  <!-- partial:index.partial.html -->
  <input class="variation" id="bluepurple" type="radio" value="1" name="color" checked="checked" />
  <label for="bluepurple"></label>
  <input class="variation" id="sunset" type="radio" value="2" name="color" />
  <label for="sunset"></label>
  <input class="variation" id="godiva" type="radio" value="3" name="color" />
  <label for="godiva"></label>
  <input class="variation" id="dark" type="radio" value="4" name="color" />
  <label for="dark"></label>
  <input class="variation" id="pinkaru" type="radio" value="5" name="color" />
  <label for="pinkaru"></label>

  <script>
    window.onload = function(){
      var button = document.getElementById("dark"); 
      button.click(); 
    }
  </script>

  <main>

    <section class="comments">
      <h6>Table</h6>
      <form method="POST">
      <h2>Add a recipient </h2>
      <div class="form-login">
        <div class="input__wrapper">
          <label class="label-form">Select an event</label>
          <select class="input-form" name="select_option">

            <?php

                include 'dbcon.php';

                $selectquery = " select * from events ";

                $query = mysqli_query($con,$selectquery);

                while ($res = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <option value="<?php echo $res['id']; 
                        ?>"><?php echo $res['event_title']; 
                        ?></option>
                </tr>
                <?php
                }
            ?>

        </select>
        </div>
        <input type="submit" class="button" name="submit" value="submit">
        <!-- <div class="spinner__wrapper">
          <div class="spinner-1">
            <div class="spinner" data-loading="Loading..."></div>
            <label>Logging you in...</label>
          </div>
        </div> -->
      </div>
      </form>
    </section>


    <section class="tables">
      <h6>Table</h6>
      <div class="table__wrapper">
        <table class="table">
          <thead class="table__header">
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>Public Id</td>
            </tr>
          </thead>
          <tbody class="table__body">

            <?php
            if (isset($result) && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['candidate_name']?></td>
                        <td><?php echo $row['candidate_public_id']?></td>
                    </tr>
                    <?php
                    // echo '<tr><td>' . $row['id'] . '</td><td>' . $row['candidate_name'] . '</td><td>' . $row['candidate_public_id'] . '</td></tr>';
                }
            }
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </main>
  <footer>
  </footer>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src="./script.js"></script>

</body>

</html>