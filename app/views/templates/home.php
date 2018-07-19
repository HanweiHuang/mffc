<?php
    require BASE_PATH.'/app/views/header.php';
?>

<div class="article">

    <h1><?php echo $article['title'] ?></h1>

    <div class="content">

        <?php echo $article['content'] ?>

    </div>

</div>

<?php
    require BASE_PATH.'/app/views/footer.php';
?>