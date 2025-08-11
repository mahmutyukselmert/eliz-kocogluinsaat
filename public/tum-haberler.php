<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proje Detay - Koçoğlu İnşaat </title>
    <?php include 'include/head.html'; ?>
    <!-- Swiper CSS - Sadece Proje Detay -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <?php include 'include/header.html'; ?>

    <main class="sub-page-main">

        <section class="page-banner short-banner">
            <div class="background-wrapper">
                <img src="./assets/images/projeler-detay-slider.webp" alt="Başkanın mesajı">
            </div>
            <div class="page-banner-content">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-12 px-lg-5 col-11">
                            <h1 class="banner-title scroll-reveal-left">Tüm Haberler</h1>
                            <p class="banner-subtitle scroll-reveal-right">Koçoğlu'ndan Haberler</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-news-form-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <h2>BİZDEN HABERLER</h2>
                        <div class="subtitle-content">
                            <p>Güncel projelerimiz, ödüllerimiz ve basında yer alan haberlerimizi buradan takip edebilirsiniz.</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="card news-card">
                            <div class="card-header">
                                <img src="./assets/images/bizden-haberler-gorsel-1.webp" class="card-img-top">
                            </div>
                            <a href="haber-detay.php" class="stretched-link">
                                <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            </a>
                            <div class="news-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card news-card">
                            <div class="card-header">
                                <img src="./assets/images/bizden-haberler-gorsel-2.webp" class="card-img-top">
                            </div>
                            <a href="haber-detay.php" class="stretched-link">
                                <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            </a>
                            <div class="news-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card news-card">
                            <div class="card-header">
                                <img src="./assets/images/bizden-haberler-gorsel-3.webp" class="card-img-top">
                            </div>
                            <a href="haber-detay.php" class="stretched-link">
                                <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                            </a>
                            <div class="news-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row mt-5">
                    <nav aria-label="Page navigation" class="d-flex justify-content-center">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </section>

        <?php include 'include/footer.html'; ?>
</body>

</html>