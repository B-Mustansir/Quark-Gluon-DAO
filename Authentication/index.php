<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Gluon Login</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
	<link rel="stylesheet" href="./style.css">

</head>

<body>
	<!-- LOGIN PHP -->
	<?php 
	
	include 'dbcon.php';

      if(isset($_POST['submit'])){
        $email = $_POST['logemail'];
        $password = $_POST['logpass'];
		$password = md5($password);

        $user_search = " select * from admin_users where email = '$email' ";
        $query = mysqli_query($con,$user_search);

        $user_count =   mysqli_num_rows($query);

        if($user_count){
            $user_pass = mysqli_fetch_assoc($query);
            $db_pass = $user_pass['password'];

            $_SESSION['username'] = $user_pass['name'];
            $_SESSION['login'] = $user_pass['email'];

            if($password==$db_pass){
              ?>
                <script>
					alert("LOGIN Successful");
                	location.replace("../AdminDashboard.php")
                </script>
              <?php
            }else {
              ?>
                <script>
                  alert('Incorrect Userid or Password !');
                </script>
              <?php
            }
        }else{
          ?>
            <script>
              alert('Incorrect Userid or Password !');
            </script>
          <?php
        }
      }

	?>

	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
						<input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
						<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<!-- LOG IN FORM -->
										<form action="<?php  echo htmlentities($_SERVER['PHP_SELF']); ?>" METHOD="POST">
											<div class="section text-center">
												<h4 class="mb-4 pb-3">Log In</h4>
												<div class="form-group">
													<input type="email" name="logemail" class="form-style"
														placeholder="Your Email" id="logemail" autocomplete="off">
													<i class="input-icon uil uil-at"></i>
												</div>
												<div class="form-group mt-2">
													<input type="password" name="logpass" class="form-style"
														placeholder="Your Password" id="logpass" autocomplete="off">
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<input type="submit" name="submit" class="btn mt-4" value="submit"/>
												<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your
														password?</a></p>
											</div>
										</form>
									</div>
								</div>
								<div class="card-back">
									<div class="center-wrap">
										<form action="LoginAction.php" method="POST">
											<div class="section text-center">
												<h4 class="mb-4 pb-3">Sign Up</h4>
												<div class="form-group"> 
													<input type="text" name="logname" class="form-style"
														placeholder="Your Full Name" id="logname" autocomplete="off">
													<i class="input-icon uil uil-user"></i>
												</div>
												<div class="form-group mt-2">
													<input type="email" name="logemail" class="form-style"
														placeholder="Your Email" id="logemail" autocomplete="off">
													<i class="input-icon uil uil-at"></i>
												</div>
												<div class="form-group mt-2">
													<input type="password" name="logpass" class="form-style"
														placeholder="Your Password" id="logpass" autocomplete="off">
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<input type="submit" name="submit" class="btn mt-4" value="submit"/>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- partial -->
	<script src="./script.js"></script>

</body>

</html>