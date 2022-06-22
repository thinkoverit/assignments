<?php
include "headers.php";

//{"mobileNumber":"9897887878","otp":"4545","isResumeApplication":false,"appId":0}
if(!empty($_POST['panNumber'])) {
?>
{
  "status": "Success",
  "statusCode": 200,
  "isValid": true,
  "fullName": "Alpha Tester"
}
<?php } else { ?>
{
  "status": "Failed",
  "message": "Failed to verify PAN"
}
<?php } ?>