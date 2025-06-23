<?php
$conn = mysqli_connect('localhost', 'root', '', 'blog_cms');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>