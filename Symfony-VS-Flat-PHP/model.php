<?php
// model.php
function open_database_connection()
{
	$dsn = "mysql:host=localhost;dbname=blog_db";
	$db = new PDO($dsn, 'root', '');
    return $db;
}
function close_database_connection(&$db)
{
	$db=null;
}
function get_all_posts()
{
    $db = open_database_connection();
    $statement = $db->query('SELECT id, title FROM post');
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $posts=$statement->fetchAll();
    close_database_connection($link);
    return $posts;
}
function get_post_by_id($id)
{
    $db = open_database_connection();
    $id = intval($id);
    $query = 'SELECT id,date, title, body FROM post WHERE id = '.$id;
    $statement=$db->query($query);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $post=$statement->fetch();
    close_database_connection($db);
    return $post;
}
