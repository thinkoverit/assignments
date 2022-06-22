<?php
include "headers.php";

//{"mobileNumber":"9897887878","otp":"4545","isResumeApplication":false,"appId":0}
if(!empty($_POST['postcode'])) {
?>
{
  "status": "Success",
  "statusCode": 200,
  "postcode": 411005, 
  "city": [
    { 
      id: 5, 
      "name": "Pune"
    }
  ], 
  "state": [
    { 
      id: 11, 
      "name": "Maharashtra"
    }
  ] 
}
<?php } else { ?>
{
  "status": "Failed",
  "message": "Failed to get details"
}
<?php } ?>