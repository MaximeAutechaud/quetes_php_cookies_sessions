<?php
if (!isset($_SESSION['login']))
    header("Location: /login.php");
?>


<?php require 'inc/head.php'; ?>

<section class="cookies container-fluid">
    <div class="row">
        <?php var_dump($_SESSION);?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
