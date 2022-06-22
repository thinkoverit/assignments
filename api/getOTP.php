<?php
include "headers.php";

if(!empty($_POST['panNumber']) && !empty($_POST['city']) && !empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['mobile'])) {
?>
{
  "status": "Success",
  "statusCode": 200
}
<?php } else { ?>
{
  "status": "Failed",
  "message": "Failed to get OTP"
}
<?php } ?>