<?php
include "headers.php";

//{"mobileNumber":"9897887878","otp":"4545","isResumeApplication":false,"appId":0}
if(!empty($_POST['mobile']) && !empty($_POST['otp'])) {
?>
{
  "status": "Success",
  "statusCode": 200
}
<?php } else { ?>
{
  "status": "Failed",
  "message": "Failed to verify OTP"
}
<?php } ?>