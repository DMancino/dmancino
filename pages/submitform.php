<html>
<body>
<?php
$to="mancinodillon20@gmail.com";
$subject="From Your Webpage!";
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
$headers="From: $email";
$sent=mail($to, $subject, $message, $headers);
if($sent)
{print ('<a href='http://www.aacfdl.com/collection.index.html">Thank you for submitting content on my webpage.  Click HERE to return to the homepage</1>') ;}
else
{print "We encountered an error while sending your email";}
?>

</body>
</html>