<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quark Gluon Dao</title>
</head>
<body>
<!-- ADMIN_USER FILEDS:

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

    <h1>Add Event</h1>
    <form action="AddEventAction.php" enctype="multipart/form-data" method="POST">
        <input type="text" placeholder="Organization name" name="org_name" /><br><br>
        <input type="text" placeholder="Event Title" name="event_name" /><br><br>
        <textarea placeholder="Event Description" name="event_desc"></textarea><br><br>
        <input type="text" placeholder="Designation One" name="desg_one" /><br><br>
        <input type="text" placeholder="Designated Person One" name="desg_person_one" /><br><br>
        Designated Person One Signature <input type="file" name="desg_person_one_sign" /><br><br>
        <input type="text" placeholder="Designation Two" name="desg_two" /><br><br>
        <input type="text" placeholder="Designated Person Two" name="desg_person_two" /><br><br>
        Designated Person Two Signature <input type="file" name="desg_person_two_sign" /><br><br>
        Organization Logo <input type="file" name="org_logo" /><br><br>
        <input type="number" placeholder="Validity Days" name="validity_days" /><br><br>
        <input type="submit" name="submit" value="submit">
    </form>

    <br><br>
    <h1>Generate Certificate</h1>
    <form action="AddCertificateAction.php" enctype="multipart/form-data" method="POST">
        <select name="event_id">

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

        </select><br><br>
        <input type="text" placeholder="candidate name" name="cand_name" /><br><br>
        <input type="text" placeholder="Candidate's Public Id" name="public_id" /><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>