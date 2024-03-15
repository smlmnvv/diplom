<section class="page__form pb-5" id="pageform">
            <div class="container">
                <div class="col d-flex justify-content-center mt-5">
                <img src="<?= $formImg ?? "" ?>" alt="apple" width="60">
                </div>
                <h2 class="text-center fw-bold text-uppercase h2 mt-4">Оставьте заявку на <?= $pageTitle ?></h2>
                <p class="text-center mt-3 mb-5">Менеджер перезвонит в течение 5 минут</p>
                <form action="" class="d-flex flex-column align-items-center">
                    <input type="text" class="consultation__form-input" placeholder="Модель телефона*" required>
                    <input type="text" class="consultation__form-input" placeholder="Ваше имя*" required>
                    <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="consultation__form-input" placeholder="Ваш телефон*" required>
                    <input type="email" class="consultation__form-input" placeholder="Почта*" required>
                    <input type="text" class="consultation__form-input" placeholder="Неисправность*" required>
                    <button class="btn btn-outline-dark mt-4">Отправить</button>
                </form>
            </div>
        </section>