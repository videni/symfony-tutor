<?php $title = $post['title'] ?>
<?php ob_start() ?>
    <h1><?php echo $post['title'] ?></h1>
    <div class="date"><?php echo $post['date'] ?></div>
    <div class="body">
        <?php echo $post['body'] ?>
    </div>
<?php $content = ob_get_clean() ?>
<?php include 'layout.php' ?>
