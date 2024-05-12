<?php

include '../db/db_connection.php';

$name = Trim(stripslashes($_POST['name']));
$comment = Trim(stripslashes($_POST['comment']));
$pageId = Trim(stripslashes($_POST['pageId']));

$addComment = mysqli_query($mysqli, "INSERT INTO `addComment`(`name`, `comment`, `pageId`) VALUES ('$name', '$comment', '$pageId')");
?>