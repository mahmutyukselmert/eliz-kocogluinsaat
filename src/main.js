import "bootstrap";
import ScrollReveal from "scrollreveal";

document.addEventListener("DOMContentLoaded", function () {
  const sr = ScrollReveal({
    duration: 1000,
    origin: "top",
    distance: "50px",
    easing: "ease-in-out",
    reset: false,
  });

  sr.reveal(".scroll-reveal");
  sr.reveal(".scroll-reveal-bottom", { origin: "bottom", distance: "100px" });
  sr.reveal(".scroll-reveal-left", { origin: "left" });
  sr.reveal(".scroll-reveal-left-step-1", { origin: "left", distance: "100px" });
  sr.reveal(".scroll-reveal-left-step-2", { origin: "left", distance: "150px" });
  sr.reveal(".scroll-reveal-right", { origin: "right" });
  sr.reveal(".scroll-reveal-top", { origin: "top" });
  sr.reveal(".scroll-reveal-scale", { scale: 0.3, duration: 1200 });
  sr.reveal(".scroll-reveal-scale-end", { scale: 1.3, duration: 1200 });
  sr.reveal(".scroll-reveal-fade", { opacity: 0, distance: "30px" });

  /* Navbar Scroll */
  const footer = document.getElementById("footer");
  const scrollToTop = document.getElementById("scroll-to-top");

  function handleScroll() {
    if (footer && scrollToTop) {
      const footerPosition = footer.getBoundingClientRect();
      const windowHeight = window.innerHeight;

      if (footerPosition.top < windowHeight) {
        scrollToTop.classList.remove("d-none");
      } else {
        scrollToTop.classList.add("d-none");
      }
    }
  }
  handleScroll(); // Initial check
  window.addEventListener("scroll", handleScroll);
});

/* CountUp.js */
import { CountUp } from "countup.js";
document.querySelectorAll(".countup").forEach((el) => {
  const value = parseInt(el.dataset.value);
  if (!isNaN(value)) {
    const observer = new IntersectionObserver(
      (entries, obs) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const counter = new CountUp(el, value);
            if (!counter.error) {
              counter.start();
              obs.unobserve(el);
            } else {
              console.error(counter.error);
            }
          }
        });
      },
      { threshold: 0.6 }
    );

    observer.observe(el);
  }
});
/* CountUp.js - End */

//Custom Dropdown
document.addEventListener("DOMContentLoaded", function () {
  const dropdowns = document.querySelectorAll(".custom-dropdown-menu");

  dropdowns.forEach(function (dropdown) {
    const toggle = dropdown.querySelector(".dropdown-toggle");
    const menu = dropdown.querySelector(".dropdown-menu");

    let clickedOnce = false;

    dropdown.addEventListener("mouseenter", () => {
      if (window.innerWidth >= 1200) {
        toggle.classList.add("show");
        menu.classList.add("show");
      }
    });

    dropdown.addEventListener("mouseleave", () => {
      if (window.innerWidth >= 1200) {
        toggle.classList.remove("show");
        menu.classList.remove("show");
      }
    });

    toggle.addEventListener("click", function (e) {
      e.preventDefault();
      if (window.innerWidth >= 1200) {
        return (window.location.href = toggle.getAttribute("href"));
      } else {
        if (!clickedOnce) {
          toggle.classList.add("show");
          menu.classList.add("show");
          clickedOnce = true;
        } else {
          window.location.href = toggle.getAttribute("href");
        }
      }
    });
  });

  // Alt menü (dropdown-submenu) için yeni kod
  const subDropdowns = document.querySelectorAll(".dropdown-submenu");

  subDropdowns.forEach(function (subDropdown) {
    const subToggle = subDropdown.querySelector(".dropdown-toggle");
    const subMenu = subDropdown.querySelector(".dropdown-menu");

    // Masaüstü ekranlarda hover ile açılmasını sağlar
    if (window.innerWidth >= 1200) {
      subDropdown.addEventListener("mouseenter", () => {
        subToggle.classList.add("show");
        subMenu.classList.add("show");
      });

      subDropdown.addEventListener("mouseleave", () => {
        subToggle.classList.remove("show");
        subMenu.classList.remove("show");
      });
    }

    // Mobil cihazlarda tıklama ile açılmasını sağlar
    subToggle.addEventListener("click", function (e) {
      if (window.innerWidth < 1200) {
        e.preventDefault(); // Linke gitmeyi engelle
        subToggle.classList.toggle("show");
        subMenu.classList.toggle("show");
      }
    });
  });

});

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      observer.unobserve(entry.target);
    }
  });
});

// Gözlemlemek istediğin tüm elementleri seç:
document.querySelectorAll('.image-box').forEach(el => observer.observe(el));

/* Referans Slider */
document.addEventListener('DOMContentLoaded', function () {
  const slider = document.getElementById("referenceItemsWrapper");
  if (slider) {
    const refPrevBtn = document.getElementById("prevBtn");
    const refNextBtn = document.getElementById("nextBtn");
    const items = document.querySelectorAll(".reference-item"); // Tüm öğeleri bir kez al

    let refCurrentIndex = 0;
    let itemsToShow = getItemsToShow(); // Görünürdeki öğe sayısını belirler
    let maxIndex = Math.max(0, items.length - itemsToShow); // Maksimum kaydırma indeksi
    let refAutoSlideInterval;

    function getItemsToShow() {
      const width = window.innerWidth;
      // Bu değerler SCSS'deki medya sorgularınızla uyumlu olmalı
      if (width >= 1400) return 6;
      if (width >= 1200) return 5;
      if (width >= 992) return 4;
      if (width >= 768) return 3;
      if (width >= 576) return 2;
      return 1; // Mobil için 1 görsel
    }

    // SLIDER KAYMA MİKTARINI HESAPLAYAN KRİTİK FONKSİYON
    function getSlideStep() {
      if (items.length === 0) return 0; // Hata önleme

      const itemsVisible = getItemsToShow();
      const firstItem = items[0];
      const itemWidth = firstItem.offsetWidth; // Bir öğenin genişliği (padding ve border dahil)

      // gap değerini wrapper'dan alıyoruz
      const wrapperStyle = window.getComputedStyle(slider); // slider (referenceItemsWrapper)
      const gap = parseInt(wrapperStyle.gap) || 0;

      // Eğer 1 öğe gösteriliyorsa, kaydırma miktarı 1 öğe genişliği + gap olmalı
      if (itemsVisible === 1) {
        return itemWidth + gap;
      } else {
        // Birden fazla öğe gösteriliyorsa, bir öğenin genişliği + gap kadar kaydır
        // Bu durumda görseldeki yarım görünen durumu engellemek için her zaman bir öğe kadar ilerliyoruz.
        return itemWidth + gap;
      }
    }


    function updateSlider() {
      // itemsToShow'u her güncellemede yeniden hesapla
      itemsToShow = getItemsToShow();
      maxIndex = Math.max(0, items.length - itemsToShow);

      const slideStep = getSlideStep(); // Kaydırma adımını al
      const translateX = refCurrentIndex * slideStep; // Toplam kaydırma miktarını hesapla

      slider.style.transform = `translateX(-${translateX}px)`;

      refPrevBtn.disabled = refCurrentIndex === 0;
      refNextBtn.disabled = refCurrentIndex >= maxIndex;
    }

    function slideNext() {
      if (refCurrentIndex < maxIndex) {
        refCurrentIndex++;
      } else {
        // Son slayta gelindiğinde başa dön
        refCurrentIndex = 0;
      }
      updateSlider();
    }

    function slidePrev() {
      if (refCurrentIndex > 0) {
        refCurrentIndex--;
      } else {
        // Başa gelindiğinde sona dön
        refCurrentIndex = maxIndex;
      }
      updateSlider();
    }

    if (refNextBtn) refNextBtn.addEventListener("click", slideNext);
    if (refPrevBtn) refPrevBtn.addEventListener("click", slidePrev);

    function startAutoSlide() {
      if (refAutoSlideInterval) clearInterval(refAutoSlideInterval);
      // slideNext'i çağırırken, her zaman tek bir adım ilerlemesini sağlarız.
      refAutoSlideInterval = setInterval(slideNext, 4000);
    }

    function stopAutoSlide() {
      clearInterval(refAutoSlideInterval);
    }

    // Intersection Observer API ile slider'ın görünürlüğünü izle
    const referencesSection = document.querySelector(".referances-section");
    if (referencesSection) {
      const observerOptions = {
        root: null, // viewport'ı referans al
        rootMargin: "0px",
        threshold: 0.5, // Bölümün %50'si görünür olduğunda
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            startAutoSlide();
          } else {
            stopAutoSlide();
          }
        });
      }, observerOptions);

      observer.observe(referencesSection);
    }

    const refSliderContainer = document.querySelector(
      ".references-slider-container"
    );
    if (refSliderContainer) {
      refSliderContainer.addEventListener("mouseenter", stopAutoSlide);
      refSliderContainer.addEventListener("mouseleave", startAutoSlide);
    }

    window.addEventListener("resize", () => {
      // Boyut değiştiğinde görünür öğe sayısını ve maksimum indeksi yeniden hesapla
      itemsToShow = getItemsToShow();
      maxIndex = Math.max(0, items.length - itemsToShow);
      // refCurrentIndex'i güncel maxIndex içinde tut, taşmayı önle
      refCurrentIndex = Math.min(refCurrentIndex, maxIndex);
      updateSlider();
      // Yeniden boyutlandırmadan sonra, autoplay'i durdurup yeniden başlatmak isteyebilirsiniz
      // Ancak Intersection Observer zaten bunu yönetecektir.
    });

    // Sayfa yüklendiğinde slider'ı başlangıç durumuna getir
    if (items.length > 0) {
      updateSlider();
    }
  }

});

/* Home Service Section Slider 
document.addEventListener("DOMContentLoaded", function() {
  const sliderWrapper = document.querySelector('.project-slider-wrapper');
  const prevBtn = document.querySelector('.prev-btn');
  const nextBtn = document.querySelector('.next-btn');

  // Slider elemanları yoksa, bu fonksiyonu çalıştırma
  if (!sliderWrapper || !prevBtn || !nextBtn) {
    return;
  }

  let currentIndex = 0;
  
  // Slider'ın pozisyonunu ve butonların durumunu güncelleyen fonksiyon
  function updateSlider() {
    const cards = document.querySelectorAll('.project-card');
    if (cards.length === 0) return;

    // Kart genişliğini ve aralığı (gap) dinamik olarak hesapla
    const cardWidth = cards[0].offsetWidth;
    const gap = parseFloat(getComputedStyle(sliderWrapper).gap) || 0;
    const cardSize = cardWidth + gap;

    // Slayt pozisyonunu güncelle
    const transformValue = -currentIndex * cardSize;
    sliderWrapper.style.transform = `translateX(${transformValue}px)`;
    
    // Butonların durumunu kontrol et
    prevBtn.disabled = currentIndex === 0;
    
    // Kaç tane kartın ekranda göründüğünü hesapla
    const visibleCards = Math.floor(sliderWrapper.parentElement.offsetWidth / cardSize);
    nextBtn.disabled = currentIndex >= cards.length - visibleCards;
  }
  
  // Önceki butona tıklama olayı
  prevBtn.addEventListener('click', () => {
    if (currentIndex > 0) {
      currentIndex--;
      updateSlider();
    }
  });

  // Sonraki butona tıklama olayı
  nextBtn.addEventListener('click', () => {
    const cards = document.querySelectorAll('.project-card');
    const cardWidth = cards[0].offsetWidth;
    const gap = parseFloat(getComputedStyle(sliderWrapper).gap) || 0;
    const cardSize = cardWidth + gap;
    const visibleCards = Math.floor(sliderWrapper.parentElement.offsetWidth / cardSize);

    if (currentIndex < cards.length - visibleCards) {
      currentIndex++;
      updateSlider();
    }
  });

  // Pencere boyutu değiştiğinde slider'ı güncelle
  window.addEventListener('resize', updateSlider);

  // Sayfa yüklendiğinde ve ilk DOM içeriği hazır olduğunda slider'ı ayarla
  updateSlider();
});

// Home Services Automat. 
document.addEventListener("DOMContentLoaded", function() {
  const sliderContainer = document.querySelector('.project-slider-container');
  const sliderWrapper = document.querySelector('.project-slider-wrapper');
  const cards = document.querySelectorAll('.project-card');

  // Gerekli tüm öğeler varsa otomatik oynatmayı başlat
  if (sliderContainer && sliderWrapper && cards.length > 0) {
    let autoPlayInterval;
    const autoplaySpeed = 5000; // 5 saniye
    let currentIndex = 0; // Bu değişkenin kapsamını buraya taşımak daha güvenli

    function updateSliderPosition() {
        const cardWidth = cards[0].offsetWidth + 20; 
        const transformValue = -currentIndex * cardWidth;
        sliderWrapper.style.transform = `translateX(${transformValue}px)`;
    }

    function startAutoplay() {
      stopAutoplay();
      autoPlayInterval = setInterval(() => {
        if (currentIndex < cards.length - 3) {
          currentIndex++;
        } else {
          currentIndex = 0;
        }
        updateSliderPosition();
      }, autoplaySpeed);
    }

    function stopAutoplay() {
      clearInterval(autoPlayInterval);
    }

    sliderContainer.addEventListener('mouseenter', stopAutoplay);
    sliderContainer.addEventListener('mouseleave', startAutoplay);

    startAutoplay();
  }
});
*/


/* Tarihçe TimeLine slider */
document.addEventListener('DOMContentLoaded', function () {
  const sliderWrapper = document.getElementById("timelineItemsWrapper");
  
  // Wrapper elementi yoksa kodun geri kalanını çalıştırma
  if (!sliderWrapper) {
    return;
  }

  const prevBtn = document.querySelector(".prevBtn");
  const nextBtn = document.querySelector(".nextBtn");
  const items = document.querySelectorAll(".timeline-item");
  const timelineSection = document.querySelector(".timeline-slider-section");
  const sliderContainer = document.querySelector(".timeline-slider");

  let currentIndex = 0;
  let itemsToShow;
  let maxIndex;

  // Görünürdeki öğe sayısını belirleyen fonksiyon
  function getItemsToShow() {
    const width = window.innerWidth;
    if (width >= 1400) return 6;
    if (width >= 1200) return 5;
    if (width >= 992) return 4;
    if (width >= 768) return 3;
    if (width >= 576) return 2;
    return 1;
  }

  // SLIDER KAYMA MİKTARINI HESAPLAYAN KRİTİK FONKSİYON
  function getSlideStep() {
    if (items.length === 0) return 0;
    const firstItem = items[0];
    const itemWidth = firstItem.offsetWidth;
    const wrapperStyle = window.getComputedStyle(sliderWrapper);
    const gap = parseInt(wrapperStyle.gap) || 0;
    return itemWidth + gap;
  }

  function updateSlider() {
    itemsToShow = getItemsToShow();
    maxIndex = Math.max(0, items.length - itemsToShow);

    const slideStep = getSlideStep();
    const translateX = currentIndex * slideStep;

    sliderWrapper.style.transform = `translateX(-${translateX}px)`;

    // Buton durumlarını güncelleme
    if (prevBtn) prevBtn.disabled = currentIndex === 0;
    if (nextBtn) nextBtn.disabled = currentIndex >= maxIndex;
  }

  function slideNext() {
    if (currentIndex < maxIndex) {
      currentIndex++;
    } else {
      currentIndex = 0; // Başa dön
    }
    updateSlider();
  }

  function slidePrev() {
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      currentIndex = maxIndex; // Sona dön
    }
    updateSlider();
  }

  // Event listener'ları eklemeden önce butonların varlığını kontrol et
  if (nextBtn) nextBtn.addEventListener("click", slideNext);
  if (prevBtn) prevBtn.addEventListener("click", slidePrev);

  let autoSlideInterval;
  function startAutoSlide() {
    stopAutoSlide();
    autoSlideInterval = setInterval(slideNext, 4000);
  }

  function stopAutoSlide() {
    clearInterval(autoSlideInterval);
  }

  // Intersection Observer API ile slider'ın görünürlüğünü izle
  if (timelineSection) {
    const observerOptions = {
      root: null,
      rootMargin: "0px",
      threshold: 0.5,
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          startAutoSlide();
        } else {
          stopAutoSlide();
        }
      });
    }, observerOptions);
    observer.observe(timelineSection);
  }

  // Mouse ile slider üzerinde durulduğunda autoplay'i durdurma
  if (sliderContainer) {
    sliderContainer.addEventListener("mouseenter", stopAutoSlide);
    sliderContainer.addEventListener("mouseleave", startAutoSlide);
  }

  window.addEventListener("resize", () => {
    currentIndex = 0; // Yeniden boyutlandırıldığında en başa dön
    updateSlider();
  });

  // Sayfa yüklendiğinde slider'ı başlangıç durumuna getir
  if (items.length > 0) {
    updateSlider();
  }
});

//Haber ve Proje Detay
import Swiper from 'swiper/bundle';
const swiper = new Swiper('.produtCarouselSlider', {
  slidesPerView: 2,
  spaceBetween: 10,
  loop: true,
  autoplay: {
      delay: 4000,
      disableOnInteraction: false,
  },
  speed: 500,
  effect: 'slide',
  navigation: {
      nextEl: '.carousel-control-next',
      prevEl: '.carousel-control-prev',
  },
  breakpoints: {
      320: {
          slidesPerView: 1
      },
      768: {
          slidesPerView: 2
      }
  }
});

/* Swiper.js ile Slayt Gösterisi */
document.addEventListener("DOMContentLoaded", function() {
    // Swiper'ı başlatmadan önce gerekli HTML elemanının varlığını kontrol edin
    const swiperElement2 = document.querySelector('.projectSliderSwiper');
    if (!swiperElement2) {
      return;
    }
  
    // Swiper kütüphanesini başlatıyoruz
    const swiper2 = new Swiper(swiperElement2, {
        // İlgili yapılandırma seçenekleri
        slidesPerView: 3, // Masaüstü görünümünde varsayılan olarak 3 slayt göster
        spaceBetween: 15, // Slaytlar arasında 20px boşluk
        loop: true, // Sonsuz döngü
        autoplay: {
          delay: 3000, // 5 saniye bekle
          disableOnInteraction: false, // Kullanıcı etkileşiminden sonra otomatik oynatmayı durdurma
        },
        speed: 800, // Geçiş hızı 800ms
        navigation: {
            nextEl: '.next-btn',
            prevEl: '.prev-btn',
        },
        
        // Farklı ekran boyutları için duyarlı ayarlar
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20
            }
        }
    });

    // Otomatik oynatmayı durdurma ve tekrar başlatma
    const sliderContainer2 = document.querySelector('.project-slider-container');
    if (sliderContainer2) {
        sliderContainer2.addEventListener('mouseenter', () => {
            swiper2.autoplay.stop();
        });
        sliderContainer2.addEventListener('mouseleave', () => {
            swiper2.autoplay.start();
        });
    }
});