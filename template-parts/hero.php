<?php
/**
 * Hero Slider Section Template Part
 *
 * @package JachOOs
 */

$img_dir = get_template_directory_uri() . '/assets/images/';
$hero1 = $img_dir . 'hero1.webp';
$hero2 = $img_dir . 'hero2.webp';
$hero3 = $img_dir . 'hero3.webp';
$hero4 = $img_dir . 'hero4.webp';
?>
<section class="hero-slider-section" id="hero-slider" aria-label="JachOOs Innovation Showcase">
  <!-- Slides Track -->
  <div class="hero-slider-track">

    <!-- =========================================================================
         Slide 1
         ========================================================================= -->
    <div class="hero-slide active" data-slide="0" style="--slide-bg: url('<?php echo esc_url($hero1); ?>');">
      <div class="hero-slide-backdrop"></div>
      <div class="hero-cyber-grid"></div>

      <!-- Floating IoT Tech Visual Elements  -->
      <div class="hero-floating-scene" aria-hidden="true">
        <div class="hero-pulse-ring ring-1"></div>
        <div class="hero-pulse-ring ring-2"></div>
        <div class="hero-pulse-ring ring-3"></div>

        <div class="hero-float-node node-server" title="Cloud & Hosting">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/></svg>
        </div>
        <div class="hero-float-node node-iot" title="IoT Applications">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12.55a11 11 0 0 1 14.08 0M1.42 9a16 16 0 0 1 21.16 0M8.53 16.11a6 6 0 0 1 6.95 0M12 20h.01"/></svg>
        </div>
        <div class="hero-float-node node-mobile" title="Mobile App Development">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="3"/><path d="M12 18h.01"/></svg>
        </div>
        <div class="hero-float-node node-ecommerce" title="E-Commerce Platforms">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
        </div>
        <div class="hero-float-node node-analytics" title="AI & Analytics">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18M18 17V9M13 17V5M8 17v-3"/></svg>
        </div>
      </div>

      <div class="container hero-container-centered">
        <div class="hero-content-centered">
          <!-- Slide Title -->
          <h1 class="hero-title-v2">
            <span class="text-white-bold">BUILD . HOST</span>
          </h1>

          <!-- Gold Center Divider Line -->
          <div class="hero-gold-divider" aria-hidden="true"></div>

          <!-- Exact Description from -->
          <p class="hero-desc-centered">
            A creative web development team with outstanding performance, that creates lasting impressions both visually and interactively. Providing business hosting on Windows and Linux Cloud Non-overloaded servers with 99.9% assured server uptime on 100% SSD drives.
          </p>

          <!-- Golden Pill CTA Button -->
          <div class="hero-actions-centered">
            <a href="https://www.jachoos.com/cloud-business-hosting" class="btn btn-hero-gold" target="_blank" rel="noopener">
              <span>More Information</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- =========================================================================
         Slide  
         ========================================================================= -->
    <div class="hero-slide" data-slide="1" style="--slide-bg: url('<?php echo esc_url($hero2); ?>');">
      <div class="hero-slide-backdrop"></div>
      <div class="hero-cyber-grid"></div>

      <!-- Floating IoT Tech Visual Elements -->
      <div class="hero-floating-scene" aria-hidden="true">
        <div class="hero-pulse-ring ring-1"></div>
        <div class="hero-pulse-ring ring-2"></div>
        <div class="hero-float-node node-mobile" title="Digital Marketing & Apps">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"/></svg>
        </div>
        <div class="hero-float-node node-analytics" title="Animated Video & Branding">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2" ry="2"/></svg>
        </div>
        <div class="hero-float-node node-iot" title="Voiceover & Media">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/><line x1="12" y1="19" x2="12" y2="23"/><line x1="8" y1="23" x2="16" y2="23"/></svg>
        </div>
      </div>

      <div class="container hero-container-centered">
        <div class="hero-content-centered">
          <!-- Slide Title  -->
          <h2 class="hero-title-v2">
            <span class="text-white-bold">GO . DIGITAL</span>
          </h2>

          <!-- Gold Center Divider Line -->
          <div class="hero-gold-divider" aria-hidden="true"></div>

          <!--  Description -->
          <p class="hero-desc-centered">
            Delivering Bespoke, Measurable and value added Digital Internet Marketing services with focus on PPC, SEO, social media services with animated, professional videos and voice over with audio effects that empower your business growth.
          </p>

          <!-- Golden Pill CTA Button -->
          <div class="hero-actions-centered">
            <a href="https://www.jachoos.com/intros-animated-logos" class="btn btn-hero-gold" target="_blank" rel="noopener">
              <span>More Information</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- =========================================================================
         Slide 3
         ========================================================================= -->
    <div class="hero-slide" data-slide="2" style="--slide-bg: url('<?php echo esc_url($hero3); ?>');">
      <div class="hero-slide-backdrop"></div>
      <div class="hero-cyber-grid"></div>

      <!-- Floating IoT Tech Visual Elements -->
      <div class="hero-floating-scene" aria-hidden="true">
        <div class="hero-pulse-ring ring-1"></div>
        <div class="hero-pulse-ring ring-3"></div>
        <div class="hero-float-node node-server" title="IT Infrastructure & Network">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/></svg>
        </div>
        <div class="hero-float-node node-ecommerce" title="E-Commerce Stores">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
        </div>
        <div class="hero-float-node node-mobile" title="Custom Software & Apps">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
        </div>
      </div>

      <div class="container hero-container-centered">
        <div class="hero-content-centered">
          <!-- Slide Title -->
          <h2 class="hero-title-v2">
            <span class="text-white-bold">IT . SOLUTIONS</span>
          </h2>

          <!-- Gold Center Divider Line -->
          <div class="hero-gold-divider" aria-hidden="true"></div>

          <!--  Description  -->
          <p class="hero-desc-centered">
            Providing Custom, Comprehensive, Full Spectrum of IT Services like Infrastructure Solutions, network and server solutions. Business application solutions including ECommerce Development, Software Application and Mobile App leading to high Productivity &amp; Best User Experience.
          </p>

          <!-- Golden Pill CTA Button -->
          <div class="hero-actions-centered">
            <a href="https://www.jachoos.com/web-development" class="btn btn-hero-gold" target="_blank" rel="noopener">
              <span>More Information</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- =========================================================================
         Slide 4
         ========================================================================= -->
    <div class="hero-slide" data-slide="3" style="--slide-bg: url('<?php echo esc_url($hero4); ?>');">
      <div class="hero-slide-backdrop"></div>
      <div class="hero-cyber-grid"></div>

      <!-- Floating IoT Tech Visual Elements-->
      <div class="hero-floating-scene" aria-hidden="true">
        <div class="hero-pulse-ring ring-2"></div>
        <div class="hero-pulse-ring ring-3"></div>
        <div class="hero-float-node node-iot" title="Leadership & Global Growth">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        </div>
        <div class="hero-float-node node-analytics" title="Enterprise Scalability">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m4.93 4.93 4.24 4.24M14.83 9.17l4.24-4.24M14.83 14.83l4.24 4.24M9.17 14.83l-4.24 4.24"/></svg>
        </div>
      </div>

      <div class="container hero-container-centered">
        <div class="hero-content-centered">
          <!-- Slide Title -->
          <h2 class="hero-title-v2">
            <span class="text-white-bold">LEADERSHIP</span>
          </h2>

          <!-- Gold Center Divider Line -->
          <div class="hero-gold-divider" aria-hidden="true"></div>

          <!-- Description-->
          <p class="hero-desc-centered">
            Generating incredible business opportunities and assured Success through our robust and scalable IT Solutions by applying latest cutting edge technologies and leveraging our strong business focused leadership.
          </p>

          <!-- Golden Pill CTA Button -->
          <div class="hero-actions-centered">
            <a href="https://www.jachoos.com/contact" class="btn btn-hero-gold" target="_blank" rel="noopener">
              <span>Contact Us</span>
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Slider Navigation Controls  -->
  <button class="slider-arrow slider-arrow-prev" id="slider-prev" aria-label="Previous Slide">
    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m15 18-6-6 6-6"/></svg>
  </button>
  <button class="slider-arrow slider-arrow-next" id="slider-next" aria-label="Next Slide">
    <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="m9 18 6-6-6-6"/></svg>
  </button>

  <!-- Slider Pagination Indicators  -->
  <div class="slider-pagination" id="slider-pagination">
    <button class="slider-dot active" data-index="0" aria-label="Slide 1: BUILD . HOST"></button>
    <button class="slider-dot" data-index="1" aria-label="Slide 2: GO . DIGITAL"></button>
    <button class="slider-dot" data-index="2" aria-label="Slide 3: IT . SOLUTIONS"></button>
    <button class="slider-dot" data-index="3" aria-label="Slide 4: LEADERSHIP"></button>
  </div>
</section>
