<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js" type="application/javascript"></script>
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

    <input type="button" value="Add in contract" onclick="generateCertificate();">

</body>
    <script src="contract.js"></script>
</html>