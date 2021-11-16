<?php

/**
 * Get the POST value of the form fields to populate the view
 * with the data after a form submit
 */

$chargeType = $_POST['charge-type'] ?? '';
$chargeTitle = $_POST['charge-title'] ?? '';
$chargeDescription = $_POST['charge-description'] ?? '';
$chargeAmount = $_POST['charge-amount'] ?? 0;
$chargeCategory = $_POST['charge-category'] ?? 1;
$activeDate = $_POST['active-date'] ?? '';
$dueDate = $_POST['due-date'] ?? '';
$earlyPayment = $_POST['early-payment'] ?? '';
$paidInFullAmount = $_POST['paid-in-full-amount'] ?? 0.00;
$paidInFullDays = $_POST['paid-in-full-days'] ?? 0;
$lateFee = $_POST['late-fee'] ?? '';
$paidAfterAmount = $_POST['paid-after-amount'] ?? 0.00;
$paidAfterDays = $_POST['paid-after-days'] ?? 0;


require 'index/index.view.php';