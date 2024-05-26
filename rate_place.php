<?php
session_start();
require '../db/db_connection.php';

if (!isset($_SESSION['user_id'])) {
    die(json_encode(['success' => false, 'message' => 'User not logged in']));
}

$user_id = $_SESSION['user_id'];
$place_name = $_POST['place_name'];
$rating = $_POST['rating'];


$stmt = $conn->prepare("SELECT firstname, lastname FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($firstname, $lastname);
$stmt->fetch();
$stmt->close();

$full_name = $firstname . ' ' . $lastname;


$stmt = $conn->prepare("SELECT * FROM ratings WHERE user_full_name = ? AND place_name = ?");
$stmt->bind_param("ss", $full_name, $place_name);
$stmt->execute();
$result = $stmt->get_result();
$is_rated = $result->num_rows > 0;
$stmt->close();

if ($is_rated) {
    die(json_encode(['success' => false, 'message' => 'You have already rated this place.']));
}


$stmt = $conn->prepare("INSERT INTO ratings (user_full_name, place_name, rating) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $full_name, $place_name, $rating);
$stmt->execute();
$stmt->close();

$conn->close();

echo json_encode(['success' => true]);
?>
