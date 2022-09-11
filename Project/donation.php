<?php
$subscription = $_POST['subscribe'];
$total_payment = 2;
//check number of months
if($subscription == "1")
    print '<p>Your payment for 1 month is ' . ($total_payment) . 'SR</p>';
elseif($subscription == "3"){
    $total_payment = $total_payment*3;
    print '<p>Your payment for 3 month is ' . ($total_payment) . 'SR</p>';
}
elseif($subscription == "6"){
    $total_payment = $total_payment*6;
    print '<p>Your payment for 6 month is ' . ($total_payment) . 'SR</p>';
}
elseif($subscription == "12"){
    $total_payment = $total_payment*12;
    print '<p>Your payment for 1 year is ' . ($total_payment) . 'SR</p>';
}
  
  ?>