<?php require_once 'modules/header.php'?>

<main class="main">

<?php require_once 'modules/pageTitle.php' ?>

<section class="feedback">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <p class="h4 mb-4">У Вас есть какой - либо вопрос? Заполните небольшую форму ниже, и как только мы получим Ваше обращение, сразу же на него ответим.</p>

                <?php if(isset($_SESSION['msg'])) : ?>
                    <p class="text-success mb-3"><?= $info ?></p>
                    <?php unset($_SESSION['msg']) ?>
                <?php endif ?>

                <form action="" class="form" method="post">
                <div class="mb-3">
                    <label for="fio" class="form-label">ФИО</label>
                    <input type="text" class="form-control" placeholder="Введите ФИО" id="fio" name="fio" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Введите Email" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Причина обращения</label>
                    <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-outline-primary mt-2">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</section>

</main>

<?php require_once 'modules/footer.php'?>