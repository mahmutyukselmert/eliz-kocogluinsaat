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

        <section class="page-banner full-banner certificates-section">
            <div class="background-wrapper">
                <img src="./assets/images/sertifikalarimiz-slider.webp" alt="Başkanın mesajı">
            </div>
            <div class="page-banner-content scroll-reveal-fade">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-12 px-lg-5 col-11">
                            <h1 class="banner-title scroll-reveal-left">SERTİFİKALARIMIZ</h1>
                            <p class="banner-subtitle scroll-reveal-right">Koçoğlu: Yapının Güvencesi.</p>
                            <div class="row col-lg-6">
                                <p class="banner-paragraph fs-18 scroll-reveal-bottom">
                                    1996 Yılında “Mehmet Koç Ferdi İşletmesi” adıyla başladığım müteahhitlik hayatında, Türkiye’nin her yerinde; birçok projeyi gerçekleştirip kısa süre içerisinde Türkiye’de taahhüt alanında kendisine iyi bir yer edinmiş, deneyimli, dinamik yapısı ve üretim kalitesiyle; Endüstriyel Tesisler, Fabrikalar, Konut İnşaatları, Restorasyon İşleri, Ticaret Merkezleri, Oteller, Banka Tadilat İşleri, Arıtma Tesisleri, Alt Yapı İşleri ve özellikle Hastane Mekanik Tesisatları olmak üzere birçok alanda ciddi projeleri gerçekleştirdik.
                                </p>
                            </div>

                            <div class="row mt-5">

                                <div class="grid-card-area mt-3">
                                    <div class="container">
                                        <div class="grid-card-list grid-card-list-5">

                                            <div class="card grid-card-item rounded-0 card-image-hover-scale" data-bs-toggle="modal" data-bs-target="#imageModal" data-image-src="./assets/images/yapinin-guvencesi.webp" data-image-title="ISO 45001">
                                                <div class="overlay"></div>
                                                <img src="./assets/images/yapinin-guvencesi.webp" class="card-img" alt="ISO 45001">
                                                <div class="card-img-overlay bottom-0">
                                                    <h5 class="card-title text-white">ISO 45001</h5>
                                                </div>
                                            </div>

                                            <div class="card grid-card-item rounded-0 card-image-hover-scale" data-bs-toggle="modal" data-bs-target="#imageModal" data-image-src="./assets/images/yapinin-guvencesi.webp" data-image-title="ISO 14001">
                                                <div class="overlay"></div>
                                                <img src="./assets/images/yapinin-guvencesi.webp" alt="ISO 14001" class="card-img">
                                                <div class="card-img-overlay bottom-0">
                                                    <h5 class="card-title text-white">ISO 14001</h5>
                                                </div>
                                            </div>

                                            <div class="card grid-card-item rounded-0 card-image-hover-scale" data-bs-toggle="modal" data-bs-target="#imageModal" data-image-src="./assets/images/yapinin-guvencesi.webp" data-image-title="ISO 9001">
                                                <div class="overlay"></div>
                                                <img src="./assets/images/yapinin-guvencesi.webp" class="card-img" alt="ISO 9001">
                                                <div class="card-img-overlay bottom-0">
                                                    <h5 class="card-title text-white">ISO 9001</h5>
                                                </div>
                                            </div>

                                            <div class="card grid-card-item rounded-0 card-image-hover-scale" data-bs-toggle="modal" data-bs-target="#imageModal" data-image-src="./assets/images/yapinin-guvencesi.webp" data-image-title="ISO 9001">
                                                <div class="overlay"></div>
                                                <img src="./assets/images/yapinin-guvencesi.webp" class="card-img" alt="ISO 9001">
                                                <div class="card-img-overlay bottom-0">
                                                    <h5 class="card-title text-white">ISO 9001</h5>
                                                </div>
                                            </div>

                                            <div class="card grid-card-item rounded-0 card-image-hover-scale" data-bs-toggle="modal" data-bs-target="#imageModal" data-image-src="./assets/images/yapinin-guvencesi.webp" data-image-title="ISO 9001">
                                                <div class="overlay"></div>
                                                <img src="./assets/images/yapinin-guvencesi.webp" class="card-img" alt="ISO 9001">
                                                <div class="card-img-overlay bottom-0">
                                                    <h5 class="card-title text-white">ISO 9001</h5>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include 'include/footer.html'; ?>

    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel"></h5>
                    <button type="button" class="btn-close btn-close-red" data-bs-dismiss="modal" aria-label="Close">

                    </button>
                </div>
                <div class="modal-body text-center position-relative">
                    <button class="modal-nav-btn" id="modal-prev-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                        </svg>
                    </button>
                    <img src="" class="img-fluid rounded" id="modalImage" alt="Büyük Görüntü">
                    <button class="modal-nav-btn" id="modal-next-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        /*Modal slider js*/
        document.addEventListener("DOMContentLoaded", function() {
            let e = document.getElementById("imageModal"),
                t = [],
                n = 0;
            document.querySelectorAll(".grid-card-item").forEach((e, n) => {
                t.push({
                    src: e.getAttribute("data-image-src"),
                    title: e.getAttribute("data-image-title")
                })
            });
            let l = n => {
                let l = t[n],
                    a = e.querySelector("#modalImage"),
                    d = e.querySelector("#imageModalLabel");
                a && (a.src = l.src, a.alt = l.title), d && (d.textContent = l.title)
            };
            e && e.addEventListener("show.bs.modal", function(e) {
                let a = e.relatedTarget,
                    d = a.getAttribute("data-image-src");
                l(n = t.findIndex(e => e.src === d))
            }), document.getElementById("modal-next-btn").addEventListener("click", function() {
                l(n = (n + 1) % t.length)
            }), document.getElementById("modal-prev-btn").addEventListener("click", function() {
                l(n = (n - 1 + t.length) % t.length)
            })
        });
    </script>
</body>

</html>