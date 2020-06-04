<?php

include(dirname(__FILE__) . '/' . "db_connects.php");

// $connect = new connector();
// $connect->getConnection();
// $conn = $connect->conn;
// $db = $connect->db;

date_default_timezone_set('Africa/Lagos');
function SendMail($email,$customer_id, $name,$customer_name, $amount,$email){
    $dates= date("d/M/Y");
    $times=date("g:i a");
    $to = $email;
    $subject = 'Approval Needed as a Guarantor ';
    $from = 'alert@smartteller.net';

    

$emailmessage = '<html><body>';
    $emailmessage .= '<style type="text/css">

h4{
            font-family:Calibri, Tahoma, Geneva, sans-serif;;
}
table{
            font-family:Calibri, Tahoma, Geneva, sans-serif;;
            font-size: 13px;
            width:100%;
            color: #666666;
            text-align:justify;
}
td{
            text-align:justify;
}
a{
            font-family:Calibri, Tahoma, Geneva, sans-serif;;
            color:#FF6600;
            text-decoration:none;
}


</style>
<table cellspacing="0" cellpadding="0" width="689" border="0">
<tbody>
<tr>
<td colspan="10">
Dear &nbsp; <strong>'.$name.'</strong>
</td>
</tr>
<tr>
<td colspan="10"></td>
</tr>
<tr>
<td colspan="10">
<h4>
<u>SmartTeller Notification Service
(SmartTeller)</u>
</h4>
</td>
</tr>
<tr>
<td colspan="10"></td>
</tr>
<tr>
<td colspan="10">
We wish to inform you that the '.$customer_name.' needs your approval in order to receive a loan of '.$amount.' You can visit the link below to accept and finalise the application.
<p><a href="https://smartteller.net/loan/accept-guarantor.php?id='.$customer_id.'&gid='.$email.'&action=accept" target="_blank">
https://smartteller.net/loan/accept-guarantor.php?id='.$customer_id.'&gid='.$email.'&action=accept"</a></p>
</td>
</tr>

</tbody>
</table>
';
    $emailmessage .= '</body></html>';
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


    // Create email headers
    $headers .= 'From: ' . $from . "\r\n" .
        'Reply-To: ' . $from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();



mail($email, $subject, $emailmessage, $headers);

}

$customer_id = $_POST['customer_id'];
$name = $_POST['name'];
$amount = $_POST['amount'];
$customer_name = $_POST['customer_name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
$contacts = $_POST['contacts'];

$date = date('m/d/Y h:i:s a', time());
$sql = "INSERT INTO guarantor (`customer_id`, `name`, `phone`, `address`, `email`, `contacts`) VALUES ('".$customer_id."', '".$name."', '".$phone."', '".$address."', '".$email."', '".$contacts."')";

$qr = mysqli_query($connection,$sql) or die(mysqli_error($connection));



if ($sql) {
	SendMail($email,$customer_id, $name,$customer_name, $amount,$email);
    $response['success'] = "1";
    $response['message'] = "Successful";
    echo json_encode($response);
} else {
    $response['success'] = "0";
    $response['message'] = "Request not successful";
    echo json_encode($response);
}
