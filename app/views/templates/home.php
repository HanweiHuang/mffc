<?php
    //require BASE_PATH.'/app/views/header.php';
    get_template_part("app/views/header");
?>

<div class="article">

    <h1><?php echo $article['title'] ?></h1>

    <div class="content">

        <?php echo $article['content'] ?>

    </div>

</div>

<?php
    get_template_part("app/views/footer");
    //require BASE_PATH.'/app/views/footer.php';
?>