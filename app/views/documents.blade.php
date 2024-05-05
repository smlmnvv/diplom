<?php require 'modules/header.php' ?>

<main class="main">

<?php require_once 'modules/pageTitle.php' ?>

    <section class="documents">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="documents__ul">
                        <?php foreach ($documents as $document) : ?>
                        <li class="documents__li mb-3">
                            <a href="<?= $document['slug'] ?>" class="documents__link"><?= $document['name']?></a>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require 'modules/footer.php' ?>