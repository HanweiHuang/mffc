<?php
/**
 * Created by PhpStorm.
 * User: HarveySally
 * Date: 7/22/2018
 * Time: 10:35 PM
 */
    //require BASE_PATH.'/app/views/header.php';
    get_template_part("app/views/header");
?>

    <div class="article">

<!--        --><?php //var_dump($users)?>

        <?php foreach($users as $key => $u){?>

            <div class="email">
                <?php echo $u['email'] ?>
                <?php echo $u['name'] ?>
            </div>

        <?php } ?>
    </div>

<?php
    get_template_part("app/views/footer");
    //require BASE_PATH.'/app/views/footer.php';
?>