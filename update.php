<?php

$db = mysqli_connect("sql213.epizy.com","epiz_24318872","E2UcRJHSmpQZW","epiz_24318872_test");


$id = $_GET['id'];
$payment_id = $_GET['payment_id'];
$payment_request_id = $_GET['payment_request_id'];
$payment_status = $_GET['payment_status'];
$result = mysqli_query($db, "SELECT * FROM mch WHERE id='$id'");
 
while($res = mysqli_fetch_array($result))
{

$name =$res['name'];
$phonenumber =$res['mobile'];
$mailid = $res['mailid'];
$address = $res['address'];
$coffee = $res['coffee'];
$tea = $res['tea'];
$milk =$res['milk'];
$puff = $res['puff'];
$samosa = $res['samosa'];
$cocktail = $res['cocktail'];
$sundal =$res['sundal'];
$verkadalai = $res['verkadalai'];
$mchcookies = $res['mchcookies'];
$mixture= $res['mixture'];
$paalkova= $res['paalkova'];
  $kajukatli = $res['kajukatli'];
  $gulabjamun = $res['gulabjamun'];
  $cake = $res['cake'];
  $brownnie = $res['brownnie'];
   $restotal = $res['restotal'];

  

}

$sql = mysqli_query($db,"UPDATE mch SET payment_status='$payment_status',payment_id='$payment_id',payment_request_id='$payment_request_id' WHERE id='$id'");

 $message = "<table border='1'>

<tr>
  <td>Name:</td>
  <td> ".$name."</td>
  </tr>
<tr>
  <td>Mobile:</td>
  <td> ".$phonenumber."</td>
</tr> 
<tr>
  <td> Email:</td>
  <td>".$mailid."</td>
</tr> 
<tr>
  <td>Address:</td>
  <td>".$address."</td>
</tr> 
<tr>
  <td>Coffee:</td>
  <td>".$coffee."</td>
</tr> 
<tr>
  <td> Tea:</td>
  <td>".$tea."</td>
</tr> 
<tr>
  <td>Milk:</td>
  <td>".$milk."</td>
</tr> 
<tr>
  <td>Puff:</td>
  <td>".$puff."</td>
</tr> 
<tr>  
  <td>Aloo Samosa:</td>
  <td>".$samosa."</td>  
</tr>
<tr>  
  <td>Cocktail:</td>
  <td>".$cocktail."</td>  
</tr>
<tr>  
  <td>Sundal:</td>
  <td>".$sundal."</td>  
</tr>
<tr>  
  <td>Verkadalai:</td>
  <td>".$verkadalai."</td>  
</tr>
<tr>  
  <td>MCH Cookies:</td>
  <td>".$mchcookies."</td>  
</tr>
<tr>  
  <td>Mixture:</td>
  <td>".$mixture."</td>  
</tr>
<tr>  
  <td>Paalkova:</td>
  <td>".$paalkova."</td>  
</tr>
<tr>  
  <td>Kaju Katli:</td>
  <td>".$kajukatli."</td>  
</tr>
<tr>  
  <td>Gulab Jamun:</td>
  <td>".$gulabjamun."</td>  
</tr>
<tr>  
  <td>Cake:</td>
  <td>".$cake."</td>  
</tr>
<tr>  
  <td>Brownnie:</td>
  <td>".$brownnie."</td>  
</tr>
<tr>  
  <td>Total:</td>
  <td>".$restotal."</td>  
</tr>

</table>";


require 'PHPMailer/PHPMailerAutoload.php';
  
  $mail = new PHPMailer;
  
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'testingphpmail25@gmail.com';
  $mail->Password = '123@abcd';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = '465';
  
  $mail->From = 'mch@gmail.com';
  $mail->FromName = 'MCH';
  $mail->addAddress('tiwinkumar.tk@gmail.com');
  $mail->addReplyTo('mch@gmail.com', 'Reply');
  
  $mail->isHTML(true);
  
  $mail->Subject = 'New Order';
  $mail->Body    = $message;
  
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  if(!$mail->send()) {
     //echo "fail";
  } else {
     //echo "success";
  }


?>



<!DOCTYPE html>
<html>
<head>
  <title>Madras Coffee House</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel='stylesheet' href='./style.css' type='text/css' media='all' />

  

</head>



<body>

<nav class="navbar navbar-default" style="background-color: #E31E24;">
  <div class="container-fluid">
    <div class="brand-centered">
      <a class="navbar-brand" href="#"><img style="margin-right: 10px; padding: 0;" src="./logo.png" alt="Madras Coffee House"></a>
    </div>

    <ul class="nav navbar-nav">
      <li><a href="./index.html"><i class="fa fa-arrow-left"></i></a></li>
    </ul>
  </div>
</nav>


  <div class="container">
  <div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
        <br><br> <h2 style="color:#0fad00">Payment Successful</h2>
        <img src="true.svg" style="width: 50px;height: 50px;">
        <h3>Dear, Customer</h3>
        <p style="font-size:20px;color:#5C5C5C;">Thanks for your Order</p>
        <a href="index.html" class="btn btn-success">     Return to Home      </a>
    <br><br>
        </div>
        
  </div>
</div>


</body>
</html>