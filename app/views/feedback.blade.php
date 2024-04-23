<?php require_once 'modules/header.php'?>

<main class="main">

<?php require_once 'modules/pageTitle.php' ?>

<section class="feedback">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="" class="form">
                <div class="mb-3">
                    <label for="fio" class="form-label">ФИО</label>
                    <input type="text" class="form-control" placeholder="Введите ФИО" id="fio" name="fio">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Введите Email" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Причина обращения</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-primary mt-2">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</section>

</main>

<?php require_once 'modules/footer.php'?>