/**
 * JachOOs Corporate Theme - Interactive Scripts
 *
 * @version 2.0.0
 */

(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {

    /* ==========================================================================
       1. Mobile Menu & Off-Canvas Drawer Toggle
       ========================================================================== */
    const navToggle = document.getElementById('nav-toggle');
    const primaryNav = document.getElementById('primary-nav');
    const offcanvasDrawer = document.getElementById('offcanvas-drawer');
    const drawerClose = document.getElementById('drawer-close');
    const drawerOverlay = document.getElementById('drawer-overlay');

    function openDrawer() {
      if (offcanvasDrawer) {
        offcanvasDrawer.classList.add('is-open');
        offcanvasDrawer.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
      }
    }

    function closeDrawer() {
      if (offcanvasDrawer) {
        offcanvasDrawer.classList.remove('is-open');
        offcanvasDrawer.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
      }
    }

    if (navToggle) {
      navToggle.addEventListener('click', function (e) {
        e.preventDefault();
        // On desktop, the hamburger opens the off-canvas quick drawer
        if (window.innerWidth > 992) {
          openDrawer();
        } else {
          // On mobile, toggle the mobile navigation dropdown or drawer
          if (primaryNav) {
            const isOpen = primaryNav.classList.contains('is-open');
            primaryNav.classList.toggle('is-open', !isOpen);
            navToggle.setAttribute('aria-expanded', String(!isOpen));
          } else {
            openDrawer();
          }
        }
      });
    }

    if (drawerClose) {
      drawerClose.addEventListener('click', closeDrawer);
    }

    if (drawerOverlay) {
      drawerOverlay.addEventListener('click', closeDrawer);
    }

    // Close on Escape key
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && offcanvasDrawer && offcanvasDrawer.classList.contains('is-open')) {
        closeDrawer();
      }
    });

    if (primaryNav) {
      primaryNav.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
          primaryNav.classList.remove('is-open');
          if (navToggle) navToggle.setAttribute('aria-expanded', 'false');
          closeDrawer();
        });
      });
    }

    /* ==========================================================================
       2. Hero Slider (Autoplay, Controls, Dots, Swipe)
       ========================================================================== */
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.slider-dot');
    const prevBtn = document.getElementById('slider-prev');
    const nextBtn = document.getElementById('slider-next');
    const sliderSection = document.getElementById('hero-slider');

    let currentSlide = 0;
    const totalSlides = slides.length;
    let autoplayTimer = null;
    const AUTOPLAY_INTERVAL = 6000;

    function goToSlide(index) {
      if (index < 0) {
        currentSlide = totalSlides - 1;
      } else if (index >= totalSlides) {
        currentSlide = 0;
      } else {
        currentSlide = index;
      }

      slides.forEach(function (slide, idx) {
        slide.classList.toggle('active', idx === currentSlide);
      });

      dots.forEach(function (dot, idx) {
        dot.classList.toggle('active', idx === currentSlide);
      });
    }

    function nextSlide() {
      goToSlide(currentSlide + 1);
    }

    function prevSlide() {
      goToSlide(currentSlide - 1);
    }

    function startAutoplay() {
      stopAutoplay();
      autoplayTimer = setInterval(nextSlide, AUTOPLAY_INTERVAL);
    }

    function stopAutoplay() {
      if (autoplayTimer) {
        clearInterval(autoplayTimer);
        autoplayTimer = null;
      }
    }

    if (totalSlides > 1) {
      if (nextBtn) {
        nextBtn.addEventListener('click', function () {
          nextSlide();
          startAutoplay();
        });
      }

      if (prevBtn) {
        prevBtn.addEventListener('click', function () {
          prevSlide();
          startAutoplay();
        });
      }

      dots.forEach(function (dot) {
        dot.addEventListener('click', function () {
          const idx = parseInt(this.getAttribute('data-index'), 10);
          goToSlide(idx);
          startAutoplay();
        });
      });

      if (sliderSection) {
        sliderSection.addEventListener('mouseenter', stopAutoplay);
        sliderSection.addEventListener('mouseleave', startAutoplay);
      }

      // Touch Swipe Support
      let touchStartX = 0;
      let touchEndX = 0;

      if (sliderSection) {
        sliderSection.addEventListener('touchstart', function (e) {
          touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        sliderSection.addEventListener('touchend', function (e) {
          touchEndX = e.changedTouches[0].screenX;
          const diff = touchStartX - touchEndX;
          if (Math.abs(diff) > 50) {
            if (diff > 0) {
              nextSlide();
            } else {
              prevSlide();
            }
            startAutoplay();
          }
        }, { passive: true });
      }

      // Start initial autoplay
      startAutoplay();
    }

    /* ==========================================================================
       3. Project Showcase Tabs
       ========================================================================== */
    const tabButtons = document.querySelectorAll('.project-tab-btn');
    const showcasePanels = document.querySelectorAll('.project-showcase-panel');

    tabButtons.forEach(function (btn) {
      btn.addEventListener('click', function () {
        const targetTabId = 'tab-' + this.getAttribute('data-tab');

        tabButtons.forEach(function (b) { b.classList.remove('active'); });
        showcasePanels.forEach(function (p) { p.classList.remove('active'); });

        this.classList.add('active');
        const targetPanel = document.getElementById(targetTabId);
        if (targetPanel) {
          targetPanel.classList.add('active');
        }
      });
    });

    /* ==========================================================================
       4. Sticky Header Enhancement on Scroll
       ========================================================================== */
    const siteHeader = document.getElementById('site-header');
    if (siteHeader) {
      window.addEventListener('scroll', function () {
        if (window.scrollY > 40) {
          siteHeader.style.boxShadow = '0 10px 30px rgba(15, 23, 42, 0.08)';
        } else {
          siteHeader.style.boxShadow = '0 4px 20px rgba(15, 23, 42, 0.04)';
        }
      }, { passive: true });
    }

    /* ==========================================================================
       5. Interactive Services Category Filtering
       ========================================================================== */
    const srvFilterButtons = document.querySelectorAll('.srv-filter-btn');
    const srvCards = document.querySelectorAll('.service-card-minimal, .service-card-v2, .service-card');

    if (srvFilterButtons.length && srvCards.length) {
      srvFilterButtons.forEach(function (button) {
        button.addEventListener('click', function () {
          const filterValue = this.getAttribute('data-filter');

          // Toggle active class on filter tabs
          srvFilterButtons.forEach(function (btn) {
            btn.classList.remove('active');
          });
          this.classList.add('active');

          // Filter card visibility with smooth opacity transition
          srvCards.forEach(function (card) {
            const cardCat = card.getAttribute('data-category');

            if (filterValue === 'all' || cardCat === filterValue) {
              card.style.display = 'flex';
              setTimeout(function () {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0) scale(1)';
              }, 10);
            } else {
              card.style.opacity = '0';
              card.style.transform = 'translateY(15px) scale(0.96)';
              setTimeout(function () {
                if (card.style.opacity === '0') {
                  card.style.display = 'none';
                }
              }, 280);
            }
          });
        });
      });
    }

    /* ==========================================================================
       6. Domain Search Register vs Transfer Tab Switcher
       ========================================================================== */
    const domainTabBtns = document.querySelectorAll('.domain-tab-btn');
    const domainInput = document.querySelector('.domain-input');
    const domainSubmitBtnSpan = document.querySelector('.btn-domain-search span');

    if (domainTabBtns.length && domainInput) {
      domainTabBtns.forEach(function (tab) {
        tab.addEventListener('click', function () {
          domainTabBtns.forEach(function (b) { b.classList.remove('active'); });
          this.classList.add('active');
          const type = this.getAttribute('data-type');
          if (type === 'transfer') {
            domainInput.placeholder = 'Enter the domain you want to transfer (e.g. mycompany.com)';
            if (domainSubmitBtnSpan) domainSubmitBtnSpan.textContent = 'Transfer Domain';
          } else {
            domainInput.placeholder = 'Enter your ideal domain name (e.g. mycompany)';
            if (domainSubmitBtnSpan) domainSubmitBtnSpan.textContent = 'Search Domain';
          }
        });
      });
    }

  });
})();

