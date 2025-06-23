<?php
include('includes/db.php');
if (!isset($_GET['id'])) die('Post not found');
$id = (int) $_GET['id'];
$query = "SELECT * FROM posts WHERE id = $id";
$result = mysqli_query($conn, $query);
$post = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head><title><?php echo htmlspecialchars($post['title']); ?></title></head>
<body>
    <h1><?php echo htmlspecialchars($post['title']); ?></h1>
    <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
    <a href="index.php">Back to Blog</a>
</body>
</html>