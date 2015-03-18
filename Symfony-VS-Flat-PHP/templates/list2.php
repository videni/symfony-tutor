<?php $title = 'List of Posts' ?>
<?php ob_start() ?>
    <h1>List of Posts</h1>
    <ul>
        <?php foreach ($posts as $post): ?>
        <li>
            <a href="/read?id=<?php echo $post['id'] ?>">
                <?php echo $post['title'] ?>
</a> </li>
Listing 2-7
Chapter 2: Symfony versus Flat PHP | 17
￼￼￼￼￼￼￼￼￼
￼        <?php endforeach ?>
    </ul>
<?php $content = ob_get_clean() ?>
<?php include 'layout.php' ?>