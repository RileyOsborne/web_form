<?php

$chargeType = isset($_POST['charge-type']) ? $_POST['charge-type'] : '';
$chargeTitle = isset($_POST['charge-title']) ? $_POST['charge-title'] : '';
$chargeDescription = isset($_POST['charge-description']) ? $_POST['charge-description'] : '';
$chargeAmount = isset($_POST['charge-amount']) ? $_POST['charge-amount'] : 0;
$chargeCategory = isset($_POST['charge-category']) ? $_POST['charge-category'] : 1;
$activeDate = isset($_POST['active-date']) ? $_POST['active-date'] : '';
$dueDate = isset($_POST['due-date']) ? $_POST['due-date'] : '';
$earlyPayment = isset($_POST['early-payment']) ? $_POST['early-payment'] : '';
$paidInFullAmount = isset($_POST['paid-in-full-amount']) ? $_POST['paid-in-full-amount'] : 0.00;
$paidInFullDays = isset($_POST['paid-in-full-days']) ? $_POST['paid-in-full-days'] : 0;
$lateFee = isset($_POST['late-fee']) ? $_POST['late-fee'] : '';
$paidAfterAmount = isset($_POST['paid-after-amount']) ? $_POST['paid-after-amount'] : 0.00;
$paidAfterDays = isset($_POST['paid-after-days']) ? $_POST['paid-after-days'] : 0;
// echo "<pre>";
// die(var_dump($chargeType));
// echo "</pre>";

require 'index.view.php';