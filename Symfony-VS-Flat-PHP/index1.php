<?php
// index.php
$link = mysql_connect('localhost', 'root', '');
mysql_select_db('blog_db', $link);
$result = mysql_query('SELECT id, title FROM post', $link);
$posts = array();
while ($row = mysql_fetch_assoc($result)) {
    $posts[] = $row;
}
mysql_close($link);
// include the HTML presentation code
require 'templates/list.php';
