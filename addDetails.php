<?php
session_start();
require "EZ-API/MemberAPI.php";
$API_Key = $_SESSION['API_Key'];
$Membership = array('MemberLevel' => 'Premium');
$response = array();
$response['status'] = 0;
$response['msg'] = "payment faild";


$data1 = array(
    'API_Key' => $API_Key,
    'FirstName' => $_SESSION["FirstName"],
    'LastName' => $_SESSION["LastName"],
    'EmailAddress' => $_SESSION["email"],
    'Country' => $_SESSION["country"],
    'Type' => 'New',
    'C1' => '1'
);
$data = array_merge($data1, $Membership);
$result = addNewMember($data);
if ($result->Result == '200-OK') {
    $response['status'] = 1;
    $response['msg'] = "success";
    // header('Location: welcomePremiumMember.php');
} else {
    $statusMsg = $result->Result . ", Detail: " . $result->ResultDetails;
    $response['status'] = 0;
    $response['msg'] = $statusMsg;
}
echo json_encode($response);
exit;
