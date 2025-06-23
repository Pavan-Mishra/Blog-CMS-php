<?php
session_start();
include('includes/db.php');
include('includes/functions.php');

$query = "SELECT * FROM posts ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Blog</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h1>Welcome to My Blog</h1>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
        <div class="post">
            <h2><?php echo htmlspecialchars($row['title']); ?></h2>
            <p><?php echo htmlspecialchars(substr($row['content'], 0, 200)); ?>...</p>
            <a href="post.php?id=<?php echo $row['id']; ?>">Read More</a>
        </div>
    <?php endwhile; ?>
</body>
</html>