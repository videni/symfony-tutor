<?php
// index.php
$dsn = "mysql:host=localhost;dbname=blog_db";
 $db = new PDO($dsn, 'root', '');
$statement = $db->query('SELECT id, title FROM post');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>List of Posts</title>
    </head>
    <body>
        <h1>List of Posts</h1>
        <ul>
            <?php while ($row = $statement->fetch()): ?>
  <li>
                <a href="/show.php?id=<?php echo $row['id'] ?>">
                    <?php echo $row['title'] ?>
                </a>
</li>
            <?php endwhile ?>
        </ul>
    </body>
</html>
<?php
$db=null;
?>
