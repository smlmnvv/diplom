<?php require 'modules/header.php' ?>

<main class="main">

    <section class="page__title">
        <div class="container">
        <h1 class="page__title-title fw-bold text-white">Новости</h1>
            <div class="row">
                <div class="col">
                    <form action="">
                        <div class="search d-flex align-items-center">
                            <input type="search" class="news__search" placeholder="Поиск по новостям">
                            <button type="submit" class="news__search-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
	                                <path fill="currentColor" d="m19.485 20.154l-6.262-6.262q-.75.639-1.725.989t-1.96.35q-2.402 0-4.066-1.663T3.808 9.503T5.47 5.436t4.064-1.667t4.068 1.664T15.269 9.5q0 1.042-.369 2.017t-.97 1.668l6.262 6.261zM9.538 14.23q1.99 0 3.361-1.37t1.37-3.361t-1.37-3.36t-3.36-1.37t-3.361 1.37t-1.37 3.36t1.37 3.36t3.36 1.37" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/img/newsImg.png" alt="новость" srcset="" class="news__img">
                </div>
                <div class="col-md-8 d-flex flex-column justify-content-center">
                    <h4 class="news__title fw-bold"><a href="#">Какой у вас уровень трудовой грамотности?</a></h4>
                    <p class="news__info">Проверить поможет «Трудовой зачет» - просветительская акция, позволяющая  оценить знания в сфере труда и занятости, повысить свои  профессиональные навыки и понять, как вести себя на рынке труда.</p>
                    <div class="box d-flex justify-content-between">
                        <a href="#" class="fw-bold">Подробнее</a>
                        <span class="news__date">12.04.2024</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require 'modules/footer.php' ?>