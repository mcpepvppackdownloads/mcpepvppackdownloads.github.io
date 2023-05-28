<?php

$data = array(

            'secret' => "0x0a6614526aab31EA09E32CfF09f0cE27Eeb625d8",

            'response' => $_POST['h-captcha-response']

        );

$verify = curl_init();

curl_setopt($verify, CURLOPT_URL, "https://hcaptcha.com/siteverify");

curl_setopt($verify, CURLOPT_POST, true);

curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));

curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($verify);

// var_dump($response);

$responseData = json_decode($response);

if($responseData->success) {

    // your success code goes here

} 

else {

   // return error to user; they did not pass

}

?>
