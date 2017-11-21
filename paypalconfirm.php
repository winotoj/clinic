<?php namespace Listener;
require('PaypalIPN.php');
use PaypalIPN;
$ipn = new PaypalIPN();
// Use the sandbox endpoint during testing.
if (false) {

    $app = new \Slim\Slim();

    $log = new Logger('main');

}
$app->get('/paypalconfirm', function() use($app, $log){
    $app->render('paypal_confirm.html');
});

$app->post('/paypalconfirm', function() use($app) {
$ipn->useSandbox();
$verified = $ipn->verifyIPN();
if ($verified) {
    /*
     * Process IPN
     * A list of variables is available here:
     * https://developer.paypal.com/webapps/developer/docs/classic/ipn/integration-guide/IPNandPDTVariables/
     */
    // The IPN is verified, process it:
  // check whether the payment_status is Completed
  // check that txn_id has not been previously processed
  // check that receiver_email is your Primary PayPal email
  // check that payment_amount/payment_currency are correct
  // process the notification
  // assign posted variables to local variables
  $item_name = $_POST['item_name'];
  $item_number = $_POST['item_number'];
  $payment_status = $_POST['payment_status'];
  $payment_amount = $_POST['mc_gross'];
  $payment_currency = $_POST['mc_currency'];
  $txn_id = $_POST['txn_id'];
  $receiver_email = $_POST['receiver_email'];
  $payer_email = $_POST['payer_email'];
  print_r($payment_amount);
  // IPN message values depend upon the type of notification sent.
  // To loop through the &_POST array and print the NV pairs to the screen:
  foreach($_POST as $key => $value) {
    echo $key . " = " . $value . "<br>";
  }
} else {
  // IPN invalid, log for manual investigation
  echo "The response from IPN was: <b>" .$res ."</b>";
}
// Reply with an empty 200 response to indicate to paypal the IPN was received correctly.
header("HTTP/1.1 200 OK");
//$app->render('paypal_confirm.html');
  $app->redirect('paypal_confirm.html.twig', array('item_name' => $item_name,
                                                'ítem_number' => $item_number,
                                                'payment_status' => $payment_status,
                                                'payment_amount' => $payment_amount,
                                                'payer_email' => $payer_email));

});
