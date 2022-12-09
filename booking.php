<html>
<head>
<title></title>
<style type="text/css">

h1 {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 2rem;
    align: center;
    color: #4CAF50;
}
table {
margin: 8px;
}

th {
font-family: Arial, Helvetica, sans-serif;
font-size: .7em;
background: #666;
color: #FFF;
padding: 2px 6px;
border-collapse: separate;
border: 1px solid #000;
}

td {
font-family: Arial, Helvetica, sans-serif;
font-size: .7em;
border: 1px solid #DDD;
}
</style>
</head>
<body>
<?php

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $enq = $_POST["enq"];
    $pax = $_POST["pax"];
    $ndays = $_POST["ndays"];
    $pickup = $_POST["pickup"];
    $drop = $_POST["drop"];
    $destination = $_POST["destination"];
    $vtype = $_POST["vtype"];
    $budget = $_POST["budget"];



    $to = "stanley2608@gmail.com";
    $subject = "New enquiry from $fname - Travelogue";

    $message = "
<html>
<head>
<title>Email Enquiry</title>
</head>
<body>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>email</th>
<th>enquiry</th>
<th>pax</th>
<th>nights days</th>
<th>Pickup</th>
<th>Drop</th>
<th>Destination type</th>
<th>Vehicle Type</th>
<th>Budget</th>
</tr>
<tr>
<td>$fname</td>
<td>$lname</td>
<td>$email</td>
<td>$enq</td>
<td>$pax</td>
<td>$ndays</td>
<td>$pickup</td>
<td>$drop</td>
<td>$destination</td>
<td>$vtype</td>
<td>$budget</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@thetravelogue.co.in>' . "\r\n";
$headers .= 'Cc: stan@thetravelogue.co.in' . "\r\n";

mail($to,$subject,$message,$headers);

echo "<h1>Your Enquiry has been sent successfully</h1>";
?>

</body>
</html>