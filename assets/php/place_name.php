<?php
session_start();
require '../db/db_connection.php';


$script_name = basename($_SERVER['SCRIPT_NAME'], '.php');


$place_name = str_replace('-', ' ', $script_name);

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
$full_name = '';

if ($user_id) {

    $stmt = $conn->prepare("SELECT firstname, lastname FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($firstname, $lastname);
    $stmt->fetch();
    $stmt->close();
    $full_name = $firstname . ' ' . $lastname;
}


$is_booked = false;
if ($full_name) {
    $stmt = $conn->prepare("SELECT * FROM bookings WHERE user_full_name = ? AND place_name = ?");
    $stmt->bind_param("ss", $full_name, $place_name);
    $stmt->execute();
    $result = $stmt->get_result();
    $is_booked = $result->num_rows > 0;
    $stmt->close();
}

$stmt = $conn->prepare("SELECT COUNT(*) FROM bookings WHERE place_name = ?");
$stmt->bind_param("s", $place_name);
$stmt->execute();
$stmt->bind_result($total_bookings);
$stmt->fetch();
$stmt->close();

$conn->close();
?>
