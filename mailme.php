<?php
$to = "miket@premiereoilfieldservices.com";
$subject = "Web Form Contact";
$message = $_REQUEST['message']." \nname: ".$_REQUEST['name']." \nPhone: ".$_REQUEST['phone'];
$message=str_replace("<br />", "\n", $message);
$from = $_REQUEST['email'];
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Thank-you <br />Your contact information has been sent.";
echo "<br />";

echo $_REQUEST['message']." <br />name: ".$_REQUEST['name']." <br />Phone: ".$_REQUEST['phone'];
?>