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
    <section class="forms">
      <h6>Form A</h6>
      <form action="AddEventAction.php" enctype="multipart/form-data" method="POST">
      <h1>Add an event</h1>
      <div class="form-login">
        <div class="input__wrapper">
          <label class="label-form">Organization name</label>
          <input class="input-form" type="text" placeholder="EthGlobal" name="org_name"/>
        </div>
        <div class="input__wrapper">
          <label class="label-form">Organization logo</label>
          <input class="input-form" type="file" placeholder="" name="org_logo"/>
        </div>
        <!-- <div class="input__wrapper">
          <label class="label-form">Password</label>
          <input class="input-form" type="password" placeholder="Password (At least 8 characters)" />
        </div> -->
        <!-- <div class="checkbox">
          <input id="checkbox-rem" type="checkbox" />
          <label for="checkbox-rem">Remember Me<span class="box"></span></label>
        </div> -->
        <div class="input__wrapper">
          <label class="label-form">Event name</label>
          <input class="input-form" type="text" placeholder="EthIndia" name="event_name"/>
        </div>
        <div class="input__wrapper">
          <label class="label-form">Event description</label>
          <textarea name="event_desc" id="event_desc" placeholder="World’s Biggest Ethereum Hackathon" style="height: 200px;"></textarea>
        </div>
        <div class="input__wrapper">
          <label class="label-form">Certification validity</label>
          <input class="input-form" type="text" placeholder="(In days)" name="validity_days"/>
        </div>
        <!-- <a class="button" id="login">Login</a> -->
        <!-- <div class="spinner__wrapper">
          <div class="spinner-1">
            <div class="spinner" data-loading="Loading..."></div>
            <label>Logging you in...</label>
          </div>
        </div> -->
      </div>
    </section>
    <!-- 
      <section class="filter-section">
      <h6>Filters</h6>
      <div class="filters">
        <h5 class="filters__title">Dog Type</h5>
        <div class="filters__item">
          <div class="checkbox">
            <input id="checkbox-1" type="checkbox" />
            <label for="checkbox-1">Puppy<span class="box"></span>
              <div class="tooltip top" data-tooltip="Younger than 18 months."><span><i class="icon-info"></i></span>
              </div>
            </label>
          </div><span class="badge status-primary">10</span>
        </div>
        <div class="filters__item">
          <div class="checkbox">
            <input id="checkbox-2" type="checkbox" checked="checked" />
            <label for="checkbox-2">Young<span class="box"></span></label>
          </div><span class="badge status-primary">5</span>
        </div>
        <div class="filters__item">
          <div class="checkbox">
            <input id="checkbox-3" type="checkbox" />
            <label for="checkbox-3">Adult<span class="box"></span></label>
          </div><span class="badge status-primary">20</span>
        </div>
        <div class="filters__item">
          <div class="checkbox">
            <input id="checkbox-4" type="checkbox" />
            <label for="checkbox-4">Senior<span class="box"></span></label>
          </div><span class="badge status-primary">8</span>
        </div>
      </div>
      <div class="filters">
        <h5 class="filters__title">Dog Size</h5>
        <div class="filters__item">
          <div class="checkbox">
            <input id="checkbox-5" type="checkbox" />
            <label for="checkbox-5">Small<span class="box"></span></label>
          </div><span class="badge status-primary">9</span>
        </div>
        <div class="filters__item">
          <div class="checkbox">
            <input id="checkbox-6" type="checkbox" checked="checked" />
            <label for="checkbox-6">Medium<span class="box"></span></label>
          </div><span class="badge status-primary">12</span>
        </div>
        <div class="filters__item">
          <div class="checkbox">
            <input id="checkbox-7" type="checkbox" />
            <label for="checkbox-7">Large<span class="box"></span></label>
          </div><span class="badge status-primary">17</span>
        </div>
        <div class="filters__item">
          <div class="checkbox">
            <input id="checkbox-8" type="checkbox" />
            <label for="checkbox-8">XL<span class="box"></span></label>
          </div><span class="badge status-primary">3</span>
        </div>
      </div>
    </section>
    <section class="well-cta-1">
      <h6>Call-to-action well: dark</h6>
      <div class="well-cta">
        <div class="well-cta__text">
          <h2>Having a "ruff" life?</h2>
          <p>Adopt a friend that will love you unconditionally as long as you give it food and snuggles. </p><a
            class="button medium">Find your life companion</a>
        </div>
        <div class="well-cta__image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/567707/pug.png"
            alt="Picture of Pug" /></div>
      </div>
    </section>
    <section class="tables">
      <h6>Table</h6>
      <div class="table__wrapper">
        <table class="table">
          <thead class="table__header">
            <tr>
              <td>Live?</td>
              <td>ID</td>
              <td>Name</td>
              <td>Breed</td>
              <td>Last Updated</td>
              <td>Status</td>
              <td> </td>
            </tr>
          </thead>
          <tbody class="table__body">
            <tr>
              <td>
                <div class="checkbox-toggle">
                  <input id="toggle-checkbox" type="checkbox" checked="checked" />
                  <label for="toggle-checkbox"></label>
                </div>
              </td>
              <td>0045</td>
              <td>Doggo Dogg</td>
              <td>Shiba Inu</td>
              <td>20 June 2019</td>
              <td><span class="badge status-primary">Available</span></td>
              <td> <span class="icon-options-vertical"></span></td>
            </tr>
            <tr>
              <td>
                <div class="checkbox-toggle">
                  <input id="toggle-checkbox-2" type="checkbox" checked="checked" />
                  <label for="toggle-checkbox-2"></label>
                </div>
              </td>
              <td>0044</td>
              <td>Labra-thor, Strongest Avenger</td>
              <td>Labrador Retriever</td>
              <td>20 June 2019</td>
              <td><span class="badge status-error">Pending</span></td>
              <td> <span class="icon-options-vertical"></span></td>
            </tr>
            <tr>
              <td>
                <div class="checkbox-toggle">
                  <input id="toggle-checkbox-3" type="checkbox" />
                  <label for="toggle-checkbox-3"></label>
                </div>
              </td>
              <td>0043</td>
              <td>Branch Manager</td>
              <td>Poodle</td>
              <td>20 June 2019</td>
              <td><span class="badge status-success">Adopted</span></td>
              <td> <span class="icon-options-vertical"></span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
    <section class="modals">
      <h6>Modal</h6>
      <div class="panel">
        <div class="panel__image"><img
            src="https://images.pexels.com/photos/1498925/pexels-photo-1498925.jpeg?auto=format%2Ccompress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500"
            alt="Human and Dog" /></div>
        <div class="panel__info">
          <h2>You are a trooper!</h2>
          <p>
            Thank you for your interest in <strong>Doggo Dogg. </strong>We will get back to you in 3 to 5 business days.
          </p>
        </div>
        <div class="panel__cta"><a class="button secondary">Got it!</a></div>
      </div>
    </section>
    <section class="media-card-1">
      <h6>Media Card I</h6>
      <div class="profile profile-imgonly">
        <div class="profile__image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/567707/dog.png"
            alt="Doggo" /></div>
        <div class="profile__info">
          <h3>Doggo Dogg</h3>
          <p class="profile__info__extra">A very good boi that loves playing fetch and ice-cream! Gentle with everyone.
            Scared of the rain.</p>
        </div>
        <div class="profile__stats">
          <p class="profile__stats__title">Type</p>
          <h5 class="profile__stats__info">Puppy</h5>
        </div>
        <div class="profile__stats">
          <p class="profile__stats__title">Size</p>
          <h5>Medium</h5>
        </div>
        <div class="profile__stats">
          <p class="profile__stats__title">Weight</p>
          <h5 class="profile__stats__info">45.85 lbs</h5>
        </div>
        <div class="profile__cta"><a class="button">Adopt Doggo!</a></div>
      </div>
    </section>
    <section class="media-card-2">
      <h6>Media Card II</h6>
      <div class="profile profile-default">
        <div class="profile__image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/567707/dog.png"
            alt="Doggo" /></div>
        <div class="profile__info">
          <h3>Doggo Dogg</h3>
          <p class="profile__info__extra">A very good boi that loves playing fetch and ice-cream! Gentle with everyone.
            Scared of the rain.</p>
        </div>
        <div class="profile__stats">
          <p class="profile__stats__title">Type</p>
          <h5 class="profile__stats__info">Puppy</h5>
        </div>
        <div class="profile__stats">
          <p class="profile__stats__title">Size</p>
          <h5>Medium</h5>
        </div>
        <div class="profile__stats">
          <p class="profile__stats__title">Weight</p>
          <h5 class="profile__stats__info">45.85 lbs</h5>
        </div>
        <div class="profile__cta"><a class="button">Adopt Doggo!</a></div>
      </div>
    </section>
    <section class="media-card-3">
      <h6>Media Card III</h6>
      <div class="profile profile-long">
        <div class="profile__image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/567707/dog.png"
            alt="Doggo" /></div>
        <div class="profile__info">
          <h3>Doggo Dogg</h3>
          <p class="profile__info__extra">A very good boi that loves playing fetch and ice-cream! Gentle with everyone.
            Scared of the rain.</p>
        </div>
        <div class="profile__stats">
          <p class="profile__stats__title">Type</p>
          <h5 class="profile__stats__info">Puppy</h5>
        </div>
        <div class="profile__stats">
          <p class="profile__stats__title">Size</p>
          <h5>Medium</h5>
        </div>
        <div class="profile__stats">
          <p class="profile__stats__title">Weight</p>
          <h5 class="profile__stats__info">45.85 lbs</h5>
        </div>
        <div class="profile__cta"><a class="button">Adopt Doggo!</a></div>
      </div>
    </section> 
  -->
    <section class="filter-section">
      <h6>Form B</h6>
      <h1>Add certificate details</h1>
      <div class="form-login">
        <div class="input__wrapper">
          <label class="label-form">Signer 1</label>
          <input class="input-form" type="text" placeholder="Layne Haber" name="desg_one"/>
        </div>
        <div class="input__wrapper">
          <label class="label-form">Designation of signer 1</label>
          <input class="input-form" type="text" placeholder="Connext" name="desg_person_one"/>
        </div>
        <div class="input__wrapper">
          <label class="label-form">Signature 1</label>
          <input class="input-form" type="file" placeholder="" name="desg_person_one_sign"/>
        </div>
        <div class="input__wrapper">
          <label class="label-form">Signer 2</label>
          <input class="input-form" type="text" placeholder="Anish Mohammed" name="desg_two"/>
        </div>
        <div class="input__wrapper">
          <label class="label-form">Designation of signer 2</label>
          <input class="input-form" type="text" placeholder="Panther Protocol" name="desg_person_two"/>
        </div>
        <div class="input__wrapper">
          <label class="label-form">Signature 2</label>
          <input class="input-form" type="file" placeholder="" name="desg_person_two_sign"/>
        </div>
        <!-- <div class="input__wrapper">
          <label class="label-form">Password</label>
          <input class="input-form" type="password" placeholder="Password (At least 8 characters)" />
        </div> -->
        <!-- <div class="checkbox">
          <input id="checkbox-rem" type="checkbox" />
          <label for="checkbox-rem">Remember Me<span class="box"></span></label>
        </div> -->
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
    
    <?php

    include 'dbcon.php';

    $selectquery_m = "SELECT * from issued_certificates ORDER BY id DESC LIMIT 1";

    $query_m = mysqli_query($con, $selectquery_m);

    // while ($res_m = mysqli_fetch_array($query_m)) {
    $res_m = mysqli_fetch_array($query_m);
        // $nm = $res_m['candidate_name'];
        // echo "<script>console.log($nm);</script>"
        ?>
        <script>
            var _id = "<?php echo $res_m['id']?>";
            var _candidate_name = "<?php echo $res_m['candidate_name']?>";
            var cand_public_id = "<?php echo $res_m['candidate_public_id']?>";

            <?php
                $evid = $res_m['event_id'];
                $event_select = " SELECT * FROM events WHERE id = $evid";

                $query_n = mysqli_query($con, $event_select);

                $res_n = mysqli_fetch_array($query_n);

                ?>
                var _org_name = "<?php echo $res_n['org_name']?>";
                var _course_name = "<?php echo $res_n['event_title']?>";
                var _expiration_date = "<?php echo $res_n['validity_days']?>";

                <?php
            ?>
        </script>
        
        <?php

    ?>

    <section class="comments">
      <h6>Form C</h6>
      <form action="AddCertificateAction.php" enctype="multipart/form-data" method="POST">
      <h2>Add a recipient </h2>
      <div class="form-login">
        <div class="input__wrapper">
          <label class="label-form">Select an event</label>
          <select class="input-form" name="event_id">

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
        <div class="input__wrapper">
          <label class="label-form">Participant name</label>
          <input class="input-form" type="text" placeholder="Mustansir" name="cand_name"/>
        </div>
        <div class="input__wrapper">
          <label class="label-form">Participant's wallet address</label>
          <input class="input-form" type="text" placeholder="1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa " name="public_id"/>
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
    <section class="well-cta-2">
      <h6>Form D</h6>
      <div class="well-cta--form">
        <div class="input__wrapper">
          <input class="button" type="button" value="Save in contract" onclick="generateCertificate();"/>
        </div>
      </div>
      <br>
      <div class="well-cta--form">
        <div class="well-cta--form__text">
          <h3>Subscribe to our application!</h3>
          <p>Get the latest features on certificate generation. We will not spam you.</p>
        </div>
        <div class="well-cta--form__input">
          <input class="input-form input--lg" type="text" placeholder="Your Email Here" />
        </div>
        <div class="well-cta--form__cta"><a class="button secondary" href="FetchEventPartUi.php">Subscribe</a></div>
      </div>
    </section>
  </main>
  <footer>
  </footer>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src="./script.js"></script>
  <script src="./contract.js"></script>

</body>

</html>