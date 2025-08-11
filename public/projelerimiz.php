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

        <section class="page-banner">
            <div class="background-wrapper">
                <img src="./assets/images/projelerimiz-slider.webp" alt="Başkanın mesajı">
            </div>
            <div class="page-banner-content">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-12 px-lg-5 col-11">
                            <h1 class="banner-title scroll-reveal-left">PROJELERİMİZ</h1>

                            <p class="banner-subtitle scroll-reveal-right">Her proje, bir vizyonun hayat bulmuş halidir.</p>
                            <div class="row col-lg-6">
                                <p class="banner-paragraph fs-18 scroll-reveal-bottom">
                                    Projelerimizi sadece fiziksel yapılar olarak değil, yaşamın merkezine değer katan bütünsel yapılar olarak tasarlıyor ve uyguluyoruz. Modern şehircilik anlayışına uygun, zamanın ruhunu yansıtan ve uzun ömürlü çözümlerle inşa ettiğimiz her proje; vizyonumuzu ve sorumluluk bilincimizi ortaya koyar.
                                </p>
                                <p class="banner-paragraph fs-18 scroll-reveal-bottom">
                                    Bugüne kadar başarıyla tamamladığımız projelerle olduğu gibi, devam eden ve geleceğe dair planladığımız yatırımlarla da ülkemize kalıcı eserler bırakma hedefiyle ilerliyoruz.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="page-projects-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <?php
                        $pr_status = null;
                        if (isset($_GET['project_status'])) {
                            $pr_status = match ($_GET['project_status']) {
                                'devam_eden' => 'devam_eden',
                                'tamamlanan' => 'tamamlanan',
                                default => null,
                            };
                        }
                        ?>
                        <a href="projelerimiz.php" class="btn-project-status <?= is_null($pr_status) ? 'active' : '' ?>">Tüm Projeler</a>
                        <a href="projelerimiz.php?project_status=devam_eden" class="btn-project-status <?= $pr_status === 'devam_eden' ? 'active' : '' ?>">Devam Eden Projeler</a>
                        <a href="projelerimiz.php?project_status=tamamlanan" class="btn-project-status <?= $pr_status === 'tamamlanan' ? 'active' : '' ?>">Tamamlanan Projeler</a>

                    </div>
                </div>

                <div class="row g-4 my-lg-3 my-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="card project-card">
                            <img src="./assets/images/projelerimiz-1.webp" class="card-img" alt="Proje Adı">
                            <a href="proje-detay.php" class="card-img-overlay d-flex flex-column justify-content-end p-4">
                                <h5 class="card-title text-white">TCDD GENEL MÜDÜRLÜK BİNASI RESTORASYON YAPIM İŞİ</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card project-card">
                            <img src="./assets/images/projelerimiz-2.webp" class="card-img" alt="Proje Adı">
                            <a href="proje-detay.php" class="card-img-overlay d-flex flex-column justify-content-end p-4">
                                <h5 class="card-title text-white">TECSİLLİ FEN FAKÜLTESİ BİNALARI VE BAĞLI BİRİMLERİNE AİT RESTORASYON, YAPIM, ONARIM VE UYGULAMA İŞİ</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card project-card">
                            <img src="./assets/images/projelerimiz-3.webp" class="card-img" alt="Proje Adı">
                            <a href="proje-detay.php" class="card-img-overlay d-flex flex-column justify-content-end p-4">
                                <h5 class="card-title text-white">AYVALIK ESKİ VERGİ DAİRESİ (YENİ BELEDİYE EK HİZMET) BİNASI RESTORASYON İŞİ</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card project-card">
                            <img src="./assets/images/projelerimiz-4.webp" class="card-img" alt="Proje Adı">
                            <a href="proje-detay.php" class="card-img-overlay d-flex flex-column justify-content-end p-4">
                                <h5 class="card-title text-white">DEMOKRASİ MEYDANI İŞ MERKEZİ YAPIM İŞİ</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card project-card">
                            <img src="./assets/images/projelerimiz-5.webp" class="card-img" alt="Proje Adı">
                            <a href="proje-detay.php" class="card-img-overlay d-flex flex-column justify-content-end p-4">
                                <h5 class="card-title text-white">ODTÜ RÜZGAR TÜNELİ BİNASI VE RÜZGAR TÜNELİ YAPIM İŞİ</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card project-card">
                            <img src="./assets/images/projelerimiz-6.webp" class="card-img" alt="Proje Adı">
                            <a href="proje-detay.php" class="card-img-overlay d-flex flex-column justify-content-end p-4">
                                <h5 class="card-title text-white">ODTÜ RÜZGAR TÜNELİ BİNASI VE RÜZGAR TÜNELİ YAPIM İŞİ</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card project-card">
                            <img src="./assets/images/projelerimiz-7.webp" class="card-img" alt="Proje Adı">
                            <a href="proje-detay.php" class="card-img-overlay d-flex flex-column justify-content-end p-4">
                                <h5 class="card-title text-white">TÜRKMENİSTAN KDHA 350 YATAKLI HASTANE</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card project-card">
                            <img src="./assets/images/projelerimiz-8.webp" class="card-img" alt="Proje Adı">
                            <a href="proje-detay.php" class="card-img-overlay d-flex flex-column justify-content-end p-4">
                                <h5 class="card-title text-white">BOLU İL ÖZEL İDARESİ 
EK BİNASI İNŞAATI</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card project-card">
                            <img src="./assets/images/projelerimiz-9.webp" class="card-img" alt="Proje Adı">
                            <a href="proje-detay.php" class="card-img-overlay d-flex flex-column justify-content-end p-4">
                                <h5 class="card-title text-white">AYDIN KAPALI 
SPOR SALONU
</h5>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <?php include 'include/footer.html'; ?>
</body>

</html>