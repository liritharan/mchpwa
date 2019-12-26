<?php

$conn=mysqli_connect("localhost","id10906624_database",".gqCeUs_uG4V_vb","id10906624_mchdata")or die("Can't Connect...");

if(!isset($_COOKIE["coffee"])) {
    $coffee = 0;
} else {
    $coffee = $_COOKIE["coffee"];
}

if(!isset($_COOKIE["tea"])) {
    $tea = 0;
} else {
    $tea = $_COOKIE["tea"];
}

if(!isset($_COOKIE["milk"])) {
    $milk = 0;
} else {
    $milk = $_COOKIE["milk"];
}

if(!isset($_COOKIE["Paalkova"])) {
    $Paalkova = 0;
} else {
    $Paalkova = $_COOKIE["Paalkova"];
}

if(!isset($_COOKIE["kajukatli"])) {
    $kajukatli = 0;
} else {
    $kajukatli = $_COOKIE["kajukatli"];
}

if(!isset($_COOKIE["gulabjamun"])) {
    $gulabjamun = 0;
} else {
    $gulabjamun = $_COOKIE["gulabjamun"];
}

if(!isset($_COOKIE["cake"])) {
    $cake = 0;
} else {
    $cake = $_COOKIE["cake"];
}

if(!isset($_COOKIE["brownnie"])) {
    $brownnie = 0;
} else {
    $brownnie = $_COOKIE["brownnie"];
}

if(!isset($_COOKIE["puff"])) {
    $puff = 0;
} else {
    $puff = $_COOKIE["puff"];
}

if(!isset($_COOKIE["samosa"])) {
    $samosa = 0;
} else {
    $samosa = $_COOKIE["samosa"];
}

if(!isset($_COOKIE["cocktail"])) {
    $cocktail = 0;
} else {
    $cocktail = $_COOKIE["cocktail"];
}

if(!isset($_COOKIE["sundal"])) {
    $sundal = 0;
} else {
    $sundal = $_COOKIE["sundal"];
}

if(!isset($_COOKIE["verkadalai"])) {
    $verkadalai = 0;
} else {
    $verkadalai = $_COOKIE["verkadalai"];
}

if(!isset($_COOKIE["mchcookies"])) {
    $mchcookies = 0;
} else {
    $mchcookies = $_COOKIE["mchcookies"];
}

if(!isset($_COOKIE["mixture"])) {
    $mixture = 0;
} else {
    $mixture = $_COOKIE["mixture"];
}

if(!isset($_COOKIE["restotal"])) {
    $restotal = 0;
} else {
    $restotal = $_COOKIE["restotal"];
}


//echo $coffee; 
//echo $tea;
//echo $milk;
//echo $Paalkova;
//echo $kajukatli;
//echo $gulabjamun;
//echo $cake;
//echo $brownnie;
//echo $puff;
//echo $samosa;
//echo $sundal;
//echo $verkadalai;
//echo $cocktail;
//echo $mchcookies;
//echo $mixture;
//echo $restotal;


if (isset($_POST['submit'])) {
  
$name = mysqli_real_escape_string($conn, $_POST['name']);
$phonenumber = mysqli_real_escape_string($conn, $_POST['mob']);
$mailid = mysqli_real_escape_string($conn, $_POST['email']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$id = rand(11111,99999);
$sql = "INSERT INTO mch (id,name,mobile,address,coffee,tea,milk,paalkova,kajukatli,gulabjamun,cake,brownnie,puff,samosa,sundal,verkadalai,cocktail,mchcookies,mixture,restotal,mailid) VALUES ('$id', '$name', '$phonenumber', '$address', '$coffee', '$tea', '$milk', '$Paalkova', '$kajukatli', '$gulabjamun', '$cake', '$brownnie', '$puff', '$samosa', '$sundal', '$verkadalai', '$cocktail', '$mchcookies', '$mixture', '$restotal', '$mailid')";
    mysqli_query($conn, $sql);
//echo $name; 
//echo $phonenumber; 
//echo $address; 


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:5d5d1be6220fd58079d6f83047402a61",
                  "X-Auth-Token:cf949f4ac255989f6c3c6d9e1c648736"));
$payload = Array(
    'purpose' => 'Madras Coffee House Order',
    'amount' => $restotal,
    'phone' => $phonenumber,
    'buyer_name' => $name,
    'redirect_url' => "http://mch.epizy.com/update.php?id=".$id."",
    'send_email' => true,
    'webhook' => '',
    'send_sms' => true,
    'email' => $mailid,
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

$json_decode = json_decode($response ,true);

$long_url = $json_decode['payment_request']['longurl'];
echo $long_url;
header('Location:'.$long_url);
//echo $response;

}
?>