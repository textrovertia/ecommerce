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
    "Authorization: Bearer sk_test_9cda11d83fcb0b28d61dcbecf9eaf247a2c659c4",
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

    



    // echo $customer_id;
    // echo $invoice_no;
    // echo $order_date;
    // echo $order_status;
    // return;
    // echo $order_status;

    // call controller function to insert into database
    // $result = add_order_controller($customer_id, $invoice_no, $order_date, $order_status);
    // $result2 = add_order_controller($customer_id, $invoice_no, $order_date, $order_status);



    // echo $qty;
    // var_dump($orderDetails);
    // return;
    

    $amount = $_GET['amount'];
    $customer_id = $_SESSION['customer_id'];
    $currency  = "GHS";
    $payment_date = date("y-m-d");
    
    // echo $order;

    $paymentDetails = add_payment_controller($amount, $customer_id, $order, $currency, $payment_date);

    // check if insertion was successful
    if($paymentDetails == true) {
        echo "insertion complete";
        // header("Location: ../View/cart.php");
    }
    else echo "insertion failed";
    }else{
    // if verification failed
    echo $response;

    
}



?>
