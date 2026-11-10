<?php
/**
 * Testimonials Section Template Part
 *
 * @package JachOOs
 */
?>
<section class="section testimonials-section" id="testimonials">
  <!-- Subtle World Map Background Watermark -->
  <div class="world-map-backdrop" aria-hidden="true">
    <svg viewBox="0 0 1000 500" fill="none" stroke="currentColor">
      <!-- Minimalist stylized world map dots/continents -->
      <path class="map-path" d="M150,120 Q180,90 240,110 T300,140 T260,220 T200,260 T140,200 Z" opacity="0.04" fill="currentColor"/>
      <path class="map-path" d="M220,290 Q250,280 290,320 T280,420 T230,450 T190,380 Z" opacity="0.04" fill="currentColor"/>
      <path class="map-path" d="M480,100 Q540,80 600,120 T620,200 T530,230 T470,180 Z" opacity="0.04" fill="currentColor"/>
      <path class="map-path" d="M500,240 Q560,220 580,290 T560,390 T500,410 T460,310 Z" opacity="0.04" fill="currentColor"/>
      <path class="map-path" d="M640,100 Q780,80 880,130 T920,220 T780,260 T660,190 Z" opacity="0.04" fill="currentColor"/>
      <path class="map-path" d="M780,320 Q860,300 900,350 T880,440 T800,430 T750,370 Z" opacity="0.04" fill="currentColor"/>
      <!-- Connection lines between global hubs -->
      <path d="M220,180 Q450,80 570,200" stroke="#fbb521" stroke-width="1.5" stroke-dasharray="4 4" opacity="0.3"/>
      <path d="M570,200 Q650,150 720,210" stroke="#fbb521" stroke-width="1.5" stroke-dasharray="4 4" opacity="0.3"/>
      <circle cx="220" cy="180" r="4" fill="#fbb521" opacity="0.7"/>
      <circle cx="570" cy="200" r="4" fill="#fbb521" opacity="0.7"/>
      <circle cx="720" cy="210" r="4" fill="#fbb521" opacity="0.7"/>
    </svg>
  </div>

  <div class="container testimonials-container">
    <div class="section-header text-center">
      <span class="testimonials-eyebrow">Dont take our word for it...</span>
      <h2 class="section-title">See what others are saying <span class="highlight-text">About Us</span></h2>
    </div>

    <div class="testimonials-grid">
      <!-- Testimonial 1: Dr Ken Lord -->
      <article class="testimonial-card">
        <div class="avatar-holder">
          <div class="client-avatar-circle">
            <svg class="avatar-svg" viewBox="0 0 100 100" fill="none">
              <circle cx="50" cy="50" r="48" fill="#e2e8f0"/>
              <!-- Male avatar silhouette with warm styling -->
              <circle cx="50" cy="40" r="18" fill="#a95f3d"/>
              <path d="M24,84 C26,64 38,58 50,58 C62,58 74,64 76,84 Z" fill="#6b6b69"/>
              <path d="M42,58 L50,68 L58,58 Z" fill="#fbb521"/>
            </svg>
          </div>
        </div>
        <div class="testimonial-body">
          <div class="quote-stars">★★★★★</div>
          <p class="testimonial-quote">
            "We have worked with JachOOs for about 3 years now. Very good team. Timely quality work. We have developed probably about 30-40 apps with them and I think you will be happy with the work they provide."
          </p>
          <div class="client-info">
            <h4 class="client-name">Dr Ken Lord</h4>
            <span class="client-role">Cloud Nine Development LLC</span>
          </div>
        </div>
      </article>

      <!-- Testimonial 2: Dr. Vinay Shah -->
      <article class="testimonial-card featured-testimonial">
        <div class="avatar-holder">
          <div class="client-avatar-circle">
            <svg class="avatar-svg" viewBox="0 0 100 100" fill="none">
              <circle cx="50" cy="50" r="48" fill="#e2e8f0"/>
              <!-- Professional doctor/leader avatar -->
              <circle cx="50" cy="38" r="18" fill="#c27e2d"/>
              <path d="M22,85 C24,63 36,56 50,56 C64,56 76,63 78,85 Z" fill="#1e293b"/>
              <path d="M45,56 L50,72 L55,56 Z" fill="#fbb521"/>
              <!-- Stethoscope hint -->
              <path d="M38,62 Q50,78 62,62" stroke="#ffdf02" stroke-width="2.5" fill="none"/>
            </svg>
          </div>
        </div>
        <div class="testimonial-body">
          <div class="quote-stars">★★★★★</div>
          <p class="testimonial-quote">
            "We have been working with JachOOs for the last 3 years and have developed a very close working relationship with them. They have developed over 75 apps for us in all platforms (Android, Apple and Cloud). They are honest, hard working and dedicated to the job. I highly recommend their work and Team One without any reservations."
          </p>
          <div class="client-info">
            <h4 class="client-name">Dr. Vinay Shah</h4>
            <span class="client-role">MD</span>
          </div>
        </div>
      </article>

      <!-- Testimonial 3: Subhash Ramachandran -->
      <article class="testimonial-card">
        <div class="avatar-holder">
          <div class="client-avatar-circle">
            <svg class="avatar-svg" viewBox="0 0 100 100" fill="none">
              <circle cx="50" cy="50" r="48" fill="#e2e8f0"/>
              <!-- Tech executive avatar -->
              <circle cx="50" cy="40" r="18" fill="#a95f3d"/>
              <path d="M24,84 C26,64 38,58 50,58 C62,58 74,64 76,84 Z" fill="#334155"/>
              <path d="M44,58 L50,70 L56,58 Z" fill="#c27e2d"/>
            </svg>
          </div>
        </div>
        <div class="testimonial-body">
          <div class="quote-stars">★★★★★</div>
          <p class="testimonial-quote">
            "We were working with JachOOs for couple of our projects. The development and management teams are very knowledgeable and they understand every requirement in detail. Deliverables are always quality tested and they make sure that the delivery dates are met. Turn around times for maintenance and issue fixes was also quick. Overall our experience with JachOOs was very much positive. Your team rocks!"
          </p>
          <div class="client-info">
            <h4 class="client-name">Subhash Ramachandran</h4>
            <span class="client-role">Enterprise Technology Director</span>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

