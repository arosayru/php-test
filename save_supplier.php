<?php
include "config/db.php";

$stmt = $conn->prepare("INSERT INTO suppliers (
supplier_code, supplier_name, address1, address2, address3,
country, website, vat_reg_no, currency, pay_mode,
contact_person, mobile_no, phone, email, fax,
svat_reg_no, origin, pay_term, is_active
) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

$is_active = isset($_POST['is_active']) ? 1 : 0;

$stmt->bind_param(
"ssssisssiissssssssi",
$_POST['supplier_code'],
$_POST['supplier_name'],
$_POST['address1'],
$_POST['address2'],
$_POST['address3'],
$_POST['country'],
$_POST['website'],
$_POST['vat_reg_no'],
$_POST['currency'],
$_POST['pay_mode'],
$_POST['contact_person'],
$_POST['mobile_no'],
$_POST['phone'],
$_POST['email'],
$_POST['fax'],
$_POST['svat_reg_no'],
$_POST['origin'],
$_POST['pay_term'],
$is_active
);

$stmt->execute();
echo "Supplier Saved Successfully!";
?>