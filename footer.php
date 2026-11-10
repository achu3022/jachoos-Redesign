<?php
/**
 * Footer Template Part
 *
 * @package JachOOs
 */
?>
<footer class="site-footer" id="site-footer">
  <!-- Top 24/7 Hotline Banner -->
  <div class="footer-hotline-strip">
    <div class="container footer-hotline-inner">
      <div class="hotline-title-group">
        <span class="hotline-icon-badge" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        </span>
        <div>
          <span class="f-hotline-label">HAVE QUESTIONS? CALL US 24/7</span>
          <a href="tel:+971585224667" class="f-hotline-number">+971-58-JACHOOS (+971-58-5224667)</a>
        </div>
      </div>
      <div class="hotline-quick-channels">
        <a href="https://wa.me/971585224667" class="channel-pill wa" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
          <span>WhatsApp: +971-585-224667</span>
        </a>
        <a href="mailto:info@jachoos.com" class="channel-pill mail">
          <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 7L2 7"/></svg>
          <span>info@jachoos.com</span>
        </a>
      </div>
    </div>
  </div>

  <!-- Main Footer Links Grid -->
  <div class="container footer-main-grid">
    <!-- Col 1: Brand & Overview -->
    <div class="footer-col footer-col-brand">
      <div class="footer-brand-wrap">
        <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="JachOOs Technologies">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/jachoos-logo-02.png'); ?>" alt="JachOOs Technologies" class="footer-logo" width="179" height="45">
        </a>
      </div>
      <p class="footer-about-text">
        JachOOs (Joint Associate for Corporate Hosting and Organization-Oriented Services) delivers high-performance cloud hosting, custom software engineering, IoT intelligence, and digital solutions for ambitious enterprises worldwide.
      </p>

      <div class="footer-badges">
        <span class="cert-pill">50+ Global Markets</span>
        <span class="cert-pill">200+ Delivered Projects</span>
        <span class="cert-pill">99.9% Uptime SLA</span>
      </div>

      <div class="footer-social-row">
        <a href="https://www.linkedin.com/company/jachoos-technologies" target="_blank" rel="noopener" aria-label="LinkedIn">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 8.76c.92 0 1.66-.74 1.66-1.66 0-.92-.74-1.66-1.66-1.66-.92 0-1.66.74-1.66 1.66 0 .92.74 1.66 1.66 1.66m1.39 9.74v-8.37H5.07v8.37h2.78z"/></svg>
        </a>
        <a href="https://twitter.com/jachoos" target="_blank" rel="noopener" aria-label="Twitter">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
        </a>
        <a href="https://www.facebook.com/jachoos" target="_blank" rel="noopener" aria-label="Facebook">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95C18.05 21.45 22 17.19 22 12z"/></svg>
        </a>
      </div>
    </div>

    <!-- Col 2: COMPANY  -->
    <div class="footer-col">
      <h4 class="footer-col-title">COMPANY</h4>
      <ul class="footer-links">
        <li><a href="https://www.jachoos.com/the-company" target="_blank" rel="noopener">Corporate Information</a></li>
        <li><a href="https://www.jachoos.com/brochures-catalogues" target="_blank" rel="noopener">Brochures &amp; Catalogues</a></li>
        <li><a href="https://www.jachoos.com/contact" target="_blank" rel="noopener">Contact</a></li>
        <li><a href="https://www.jachoos.com/careers" target="_blank" rel="noopener">Careers</a></li>
        <li><a href="https://www.jachoos.com/terms-of-service" target="_blank" rel="noopener">Terms of Service</a></li>
        <li><a href="https://www.jachoos.com/blogs/" target="_blank" rel="noopener">Corporate Blog</a></li>
        <li><a href="https://www.jachoos.com/data-protection-policy" target="_blank" rel="noopener">Data Protection Policy</a></li>
        <li><a href="https://www.jachoos.com/privacy-policy" target="_blank" rel="noopener">Privacy Policy</a></li>
      </ul>
    </div>

    <!-- Col 3: Core Services -->
    <div class="footer-col">
      <h4 class="footer-col-title">Our Solutions</h4>
      <ul class="footer-links">
        <li><a href="https://www.jachoos.com/mobile-application" target="_blank" rel="noopener">Mobile App Development</a></li>
        <li><a href="https://www.jachoos.com/technology-software-development" target="_blank" rel="noopener">Software Development</a></li>
        <li><a href="https://www.jachoos.com/cloud-business-hosting" target="_blank" rel="noopener">Business Cloud Hosting</a></li>
        <li><a href="https://www.jachoos.com/it-consulting-services" target="_blank" rel="noopener">IT Consulting Services</a></li>
        <li><a href="https://www.jachoos.com/ecommerce-development" target="_blank" rel="noopener">eCommerce Development</a></li>
        <li><a href="https://www.jachoos.com/internet-marketing" target="_blank" rel="noopener">Digital Marketing &amp; SEO</a></li>
        <li><a href="https://www.jachoos.com/it-infrastructure" target="_blank" rel="noopener">IT Infrastructure &amp; AMC</a></li>
        <li><a href="https://www.jachoos.com/voice-over" target="_blank" rel="noopener">Music &amp; Audio Voiceover</a></li>
      </ul>
    </div>

    <!-- Col 4: Global Hubs (India, UK, UAE) -->
    <div class="footer-col">
      <h4 class="footer-col-title">Global Offices</h4>
      <div class="footer-offices-compact">
        <div class="f-office">
          <b>🇦🇪 UAE &ndash; Dubai</b>
          <span>#1006, Warsan towers, Barsha Heights, Tecom</span>
          <a href="tel:+97143554984">Tel: +971 4 3554984</a>
          <span><a href="mailto:sales@jachoos.com">sales@jachoos.com</a></span>
        </div>
        <div class="f-office">
          <b>🇮🇳 INDIA &ndash; Kochi &amp; Kottayam</b>
          <span>SBC 3, Thapasya Building, Infopark, Kochi</span>
          <a href="tel:+914844053219">Tel: +91 484 405 3219</a>
        </div>
        <div class="f-office">
          <b>🇬🇧 UK &ndash; London</b>
          <span>71-75, Shelton Street, Covent Garden, WC2H 9JQ</span>
          <a href="tel:+442032909011">Tel: +44 2032909011</a>
          <span><a href="mailto:info@jachoos.uk">info@jachoos.uk</a></span>
        </div>
      </div>
    </div>
  </div>

  <!-- Bottom Legal & Copyright Bar -->
  <div class="footer-bottom-bar">
    <div class="container footer-bottom-inner">
      <div class="footer-copy">
        <span>The entirety of this site is protected by copyright &copy; 2001&ndash;2026 JachOOs Technologies Pvt Ltd. All rights reserved.</span>
      </div>
      <div class="footer-legal-links">
        <a href="https://www.jachoos.com/terms-of-service" target="_blank" rel="noopener">Terms</a>
        <a href="https://www.jachoos.com/privacy-policy" target="_blank" rel="noopener">Privacy</a>
        <a href="https://www.jachoos.com/data-protection-policy" target="_blank" rel="noopener">Data Protection</a>
        <a href="https://www.jachoos.com/contact" target="_blank" rel="noopener">Contact Us</a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
