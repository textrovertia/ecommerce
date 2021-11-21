<?php
session_start();
require('../controllers/cart_controller.php');



// initialize a client url which we will use to send the reference to the paystack server for verification
$curl = curl_init();

// set options for the curl session insluding the url, headers, timeout, etc
curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.paystack.co/transaction/verify/{$_GET['reference']}",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer sk_live_497a3a223893acf3ff8ecfd4dce1158b2fc9b088",
    "Cache-Control: no-cache",
),
));

// get the response and store
$response = curl_exec($curl);
// if there are any errors
$err = curl_error($curl);
// close the session
curl_close($curl);

// convert the response to PHP object
$decodedResponse = json_decode($response);

// check if the object has a status property and if its equal to 'success' ie. if verification was successful
if(isset($decodedResponse->data->status) && $decodedResponse->data->status === 'success'){

    $customer_id = $_SESSION['customer_id'];
    $invoice_no = rand();
    $order_date = date("y-m-d");
    $order_status = $decodedResponse->data->status;

    $order = add_order_controller($customer_id, $invoice_no, $order_date, $order_status);

    

    // echo $customer_id;
    // echo $qty;
    // var_dump($order);
    // return;
    

    $amount = $_GET['amount'];
    $customer_id = $_SESSION['customer_id'];
    $currency  = "GHS";
    $payment_date = date("y-m-d");
    
    // echo $order;

    $paymentDetails = add_payment_controller($amount, $customer_id, $order, $currency, $payment_date);

    // check if insertion was successful
    if($paymentDetails == true) {
        // echo "insertion complete";
        header("Location: ../index.php");
    }
    else echo "insertion failed";
    }else{
    // if verification failed
    echo $response;

    
}



?>
