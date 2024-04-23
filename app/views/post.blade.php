<?php require_once 'modules/header.php'?>

<main class="main">
<?php require_once 'modules/pageTitle.php'?>

<section class="post">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <p class="fw-bold"><?= $post['date'] ?></p>
                <?= $post['text'] ?>
                <img src="<?= $post['img'] ?>" alt="<?= $post['title'] ?>" class="post__img mt-3">          
            </div>
        </div>
    </div>
</section>
</main>

<?php require_once 'modules/footer.php'?>