
<?php
$username="";
$useremail="";
$phone="";
$company="";
$comments="";

if($_REQUEST['username']){$username = $_REQUEST['username'];}
if($_REQUEST['useremail']){$useremail = $_REQUEST['useremail'];}
if($_REQUEST['phone']){$phone = $_REQUEST['phone'];}
if($_REQUEST['company']){$company = $_REQUEST['company'];}
if($_REQUEST['comments']){$comments = $_REQUEST['comments'];}
$error=0;

/*if (!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$useremail)) {
echo "Please enter valid email. ";
$error++;
}*/


if($error<1){
//for user
//$user_notify_email="office@ntrlogistics.com";
//$user_notify_email="siddharthsingh91@gmail.com";
$to = "office@ntrlogistics.com";
//$to = "siddharthsingh91@gmail.com";
$subject = "Request an estimate from website";
$message = "
<html>
<head>
</head>
<body>
<p>This email for user</p>
<table>
<tr><td>Name:</td><td>$username</td></tr>
<tr><td>Email:</td><td>$useremail</td></tr>
<tr><td>Phone:</td><td>$phone</td></tr>
<tr><td>Company:</td><td>$company</td></tr>
<tr><td>Comments:</td><td>$comments</td></tr>
</table>
</body>
</html>
";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <info@ntrlogistics.com>' . "\r\n";

mail($to,$subject,$message,$headers);
echo "<font style='color:#80ffaf'>Thank you for sending us Notification </font>";
}
?>
