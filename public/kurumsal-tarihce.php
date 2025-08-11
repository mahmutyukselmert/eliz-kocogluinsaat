<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Başkanın Mesajı - Koçoğlu İnşaat </title>
    <?php include 'include/head.html'; ?>
</head>

<body>
    <?php include 'include/header.html'; ?>

    <main class="sub-page-main">

        <section class="page-banner ">
            <div class="background-wrapper">
                <img src="./assets/images/tarihcesi-slider.webp" alt="Başkanın mesajı">
            </div>
            <div class="page-banner-content timeline-page-banner-content">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-12 col-8">
                            <h1 class="banner-title scroll-reveal-left">TARİHÇE</h1>
                        </div>
                        <div class="col-lg-0 col-4">
                            <div class="mobile-slider-conrols d-lg-none">
                                <button class="slider-btn slider-btn-prev prevBtn" id="prevBtnMobile">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                                    </svg>
                                </button>
                                <button class="slider-btn slider-btn-next nextBtn" id="nextBtnMobile"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    // PHP ile verilerinizi bir dizi içinde tanımlayın
                    $timeline_data = [
                        ['year' => 1996, 'image' => './assets/images/tarihce-gorsel-1.webp'],
                        ['year' => 2000, 'image' => './assets/images/tarihce-gorsel-2.webp'],
                        ['year' => 2006, 'image' => './assets/images/tarihce-gorsel-3.webp'],
                        ['year' => 2011, 'image' => './assets/images/tarihce-gorsel-4.webp'],
                        ['year' => 2016, 'image' => './assets/images/tarihce-gorsel-5.webp'],
                        ['year' => 2019, 'image' => './assets/images/tarihce-gorsel-6.webp'],
                        ['year' => 2019, 'image' => './assets/images/tarihce-gorsel-1.webp'],
                    ];
                    ?>

                    <div class="timeline-slider-section">
                        <div class="container-fluid">
                            <div class="position-relative">
                                <button class="slider-btn slider-btn-prev prevBtn d-none d-lg-block" id="prevBtn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                                    </svg>
                                </button>

                                <div class="timeline-slider" id="timelineSlider">
                                    <div class="timeline-items-wrapper" id="timelineItemsWrapper">
                                        <?php foreach ($timeline_data as $item): ?>
                                            <div class="timeline-item">
                                                <a href="#" class="timeline-box">
                                                    <img src="<?= $item['image'] ?>" alt="Tarihçe - <?= $item['year'] ?>" class="img-fluid">
                                                    <div class="timeline-text">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                                                    </div>
                                                </a>
                                                <div class="timeline-year-item">
                                                    <span class="timeline-year-point"></span>
                                                    <span class="timeline-year-text"><?= $item['year'] ?></span>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <button class="slider-btn slider-btn-next nextBtn d-none d-lg-block" id="nextBtn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                                    </svg></button>
                            </div>
                        </div>
                        <div class="timeline-bottom-line"></div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <?php include 'include/footer.html'; ?>
</body>

</html>