<?php 

//major parameters to be passed are email, amount and the api key
//$email = $_POST['email'];
//$amount = $_POST['amount'];
//paystack only works with kobo so we have to multiply the amount that is to be charged by 100
//$payamount = $amount * 100;

$curl = curl_init();


// url to go to after payment
$callback_url = 'localhost/miotmay/public/order-complete.php'; //url that will be used to receive the callback response

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://paystack.com/pay/product-1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'item_total'=>$payamount,//amount that paystack will process
    'user_email'=>$email,//email of customer that paystack will tie to the transaction
    'callback_url'=>$callback_url// callback url that will receive response
  ]),
  CURLOPT_HTTPHEADER => [
    "authorization: Bearer sk_testanythingthatpaystackassignsondashboard", //replace this with your own test key ie sk_testanythingthatpaystackassignsondashboard
    "content-type: application/json",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){//this checks if there's an error initiating the api
  // there was an error contacting the Paystack API
  die('Curl returned error: ' . $err);
}

$tranx = json_decode($response, true);//this decodes the json response of the api for initializing
header('Location: ' . $tranx['data']['authorization_url']);//if there is a response redirect to the paystack payment page
if(!$tranx->status){//if there is no response end the process
  // there was an error from the API
  print_r('API returned error: ' . $tranx['message']);
}

?>
