<?php
/**
 * Header Template
 *
 * @package JachOOs
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <title>Top IT Company in Dubai | IT Solutions & Services</title>
  <meta name="description" content=" JachOOs is The Top IT Company in Dubai. We are Providing Best IT Solution and Services like Hosting, Media Services, Digital Marketing  in Dubai,UAE" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main-content"><?php esc_html_e('Skip to main content', 'jachoos'); ?></a>

<!-- Top Utility Bar -->
<div class="header-topbar" id="header-topbar">
  <div class="container topbar-inner">
    <div class="topbar-contact">
      <a href="mailto:info@jachoos.com" class="topbar-item" title="Email JachOOs Global">
        <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 7L2 7"/></svg>
        <span>info@jachoos.com</span>
      </a>
      <span class="topbar-sep" aria-hidden="true">|</span>
      <a href="tel:+97143554067" class="topbar-item" title="Call Dubai Headquarters">
        <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        <span>+971 4 355 4067 (Dubai)</span>
      </a>
      <span class="topbar-sep hide-sm" aria-hidden="true">|</span>
      <a href="tel:+914844053219" class="topbar-item hide-sm" title="Call India Development Center">
        <span>+91 484 405 3219 (India)</span>
      </a>
    </div>

    <div class="topbar-socials">
      <span class="topbar-badge hide-md">24/7 Global IT Support</span>
      <a href="https://facebook.com/jachoos" class="topbar-social-link" target="_blank" rel="noopener" aria-label="JachOOs Facebook">
        <svg viewBox="0 0 24 24" width="13" height="13" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
      </a>
      <a href="https://twitter.com/jachoos" class="topbar-social-link" target="_blank" rel="noopener" aria-label="JachOOs Twitter">
        <svg viewBox="0 0 24 24" width="13" height="13" fill="currentColor"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg>
      </a>
      <a href="https://linkedin.com/company/jachoos" class="topbar-social-link" target="_blank" rel="noopener" aria-label="JachOOs LinkedIn">
        <svg viewBox="0 0 24 24" width="13" height="13" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2zM4 2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/></svg>
      </a>
    </div>
  </div>
</div>

<!-- Top Sticky Header -->
<header class="site-header jachoos-header-v2" id="site-header">
  <div class="container header-inner-v2">
    <!-- Brand Logo -->
    <div class="brand">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-link" aria-label="JachOOs - Your IT and Media Partner">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/jachoos-logo-02.png'); ?>" alt="JachOOs - Your IT and Media Partner" class="brand-logo" width="179" height="45">
      </a>
    </div>

    <!-- Main Navigation Bar -->
    <nav class="primary-nav-v2" id="primary-nav" aria-label="<?php esc_attr_e('Main navigation', 'jachoos'); ?>">
      <ul class="nav-list-v2">
        <li class="nav-item-v2 active">
          <a href="https://www.jachoos.com/" class="nav-link-v2">HOME</a>
        </li>

        <li class="nav-item-v2 has-dropdown-v2">
          <a href="https://www.jachoos.com/#" class="nav-link-v2">
            <span>CORPORATE</span>
            <svg class="nav-arrow" viewBox="0 0 24 24" width="10" height="10"><path d="m6 9 6 6 6-6" fill="none" stroke="currentColor" stroke-width="2.5"/></svg>
          </a>
          <ul class="dropdown-menu-v2">
            <li><a href="#why-jachoos">About JachOOs</a></li>
            <li><a href="#testimonials">Client Testimonials</a></li>
            <li><a href="#contact">Global Office Hubs</a></li>
            <li><a href="#contact">Leadership Team</a></li>
          </ul>
        </li>

        <li class="nav-item-v2 has-dropdown-v2">
          <a href="https://www.jachoos.com/#" class="nav-link-v2">
            <span>HOSTING</span>
            <svg class="nav-arrow" viewBox="0 0 24 24" width="10" height="10"><path d="m6 9 6 6 6-6" fill="none" stroke="currentColor" stroke-width="2.5"/></svg>
          </a>
          <ul class="dropdown-menu-v2">
            <li><a href="https://www.jachoos.com/cloud-business-hosting">Cloud Business Hosting</a></li>
            <li><a href="#services">Dedicated Bare-Metal Servers</a></li>
            <li><a href="#services">SSD cPanel &amp; WHM Hosting</a></li>
            <li><a href="#services">Domain Registration &amp; SSL</a></li>
          </ul>
        </li>

        <li class="nav-item-v2 has-dropdown-v2">
          <a href="https://www.jachoos.com/#" class="nav-link-v2">
            <span>IT SERVICES</span>
            <svg class="nav-arrow" viewBox="0 0 24 24" width="10" height="10"><path d="m6 9 6 6 6-6" fill="none" stroke="currentColor" stroke-width="2.5"/></svg>
          </a>
          <ul class="dropdown-menu-v2">
            <li><a href="https://www.jachoos.com/web-development">Web &amp; Application Development</a></li>
            <li><a href="#services">IoT Application &amp; Smart Sensors</a></li>
            <li><a href="#services">Custom Mobile Apps (iOS &amp; Android)</a></li>
            <li><a href="#services">IT Infrastructure &amp; AMC Support</a></li>
          </ul>
        </li>

        <li class="nav-item-v2 has-dropdown-v2">
          <a href="https://www.jachoos.com/#" class="nav-link-v2">
            <span>MEDIA SERVICE</span>
            <svg class="nav-arrow" viewBox="0 0 24 24" width="10" height="10"><path d="m6 9 6 6 6-6" fill="none" stroke="currentColor" stroke-width="2.5"/></svg>
          </a>
          <ul class="dropdown-menu-v2">
            <li><a href="https://www.jachoos.com/intros-animated-logos">Animated Logos &amp; Video Production</a></li>
            <li><a href="#services">Graphic Design &amp; UI/UX</a></li>
            <li><a href="#services">Music &amp; Audio Voiceover</a></li>
          </ul>
        </li>

        <li class="nav-item-v2 has-dropdown-v2">
          <a href="https://www.jachoos.com/#" class="nav-link-v2">
            <span>SOLUTIONS</span>
            <svg class="nav-arrow" viewBox="0 0 24 24" width="10" height="10"><path d="m6 9 6 6 6-6" fill="none" stroke="currentColor" stroke-width="2.5"/></svg>
          </a>
          <ul class="dropdown-menu-v2">
            <li><a href="#services">Odoo ERP Implementation</a></li>
            <li><a href="#services">E-Commerce Platforms (Magento/Woo)</a></li>
            <li><a href="#why-jachoos">Paperless Office Systems</a></li>
            <li><a href="#why-jachoos">Cloud Backup &amp; Disaster Recovery</a></li>
          </ul>
        </li>

        <li class="nav-item-v2 has-dropdown-v2">
          <a href="https://www.jachoos.com/#" class="nav-link-v2">
            <span>MARKETING</span>
            <svg class="nav-arrow" viewBox="0 0 24 24" width="10" height="10"><path d="m6 9 6 6 6-6" fill="none" stroke="currentColor" stroke-width="2.5"/></svg>
          </a>
          <ul class="dropdown-menu-v2">
            <li><a href="#services">Search Engine Optimization (SEO)</a></li>
            <li><a href="#services">Google Ads &amp; PPC Campaigns</a></li>
            <li><a href="#services">Social Media Marketing (SMM)</a></li>
          </ul>
        </li>

        <li class="nav-item-v2">
          <a href="https://www.jachoos.com/#" class="nav-link-v2">WRITING</a>
        </li>

        <li class="nav-item-v2">
          <a href="https://www.jachoos.com/contact" class="nav-link-v2">CONTACT</a>
        </li>

        <li class="nav-item-v2 nav-partner-btn">
          <a href="https://www.jachoos.com/partner" class="nav-link-v2 partner-link">
            <span>PARTNER WITH US</span>
            <span class="partner-emoji" aria-hidden="true">🤝</span>
          </a>
        </li>
      </ul>

      <!-- Hamburger Action Button ( -->
      <button class="nav-toggle-v2" id="nav-toggle" aria-label="<?php esc_attr_e('Toggle navigation drawer', 'jachoos'); ?>" aria-expanded="false">
        <span class="bar-v2"></span>
        <span class="bar-v2"></span>
        <span class="bar-v2"></span>
      </button>
    </nav>
  </div>
</header>

<!-- Off-Canvas Quick Contact Drawer  -->
<div class="offcanvas-drawer" id="offcanvas-drawer" aria-hidden="true">
  <div class="drawer-overlay" id="drawer-overlay"></div>
  <div class="drawer-content">
    <div class="drawer-header">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/jachoos-logo-02.png'); ?>" alt="JachOOs" class="drawer-logo" width="160" height="40">
      <button class="drawer-close-btn" id="drawer-close" aria-label="Close menu">&times;</button>
    </div>

    <div class="drawer-body">
      <p class="drawer-intro">
        Joint Associate for Corporate Hosting and Organization-Oriented Services. Global IT &amp; Media partner for modern enterprises.
      </p>

      <div class="drawer-hubs">
        <h4>Global Hubs</h4>
        <div class="drawer-hub-item">
          <b>🇦🇪 Dubai, UAE</b>
          <p>#1006 Warsan Towers, Barsha Heights</p>
          <a href="tel:+97143554067">+971 4 355 4067</a>
        </div>
        <div class="drawer-hub-item">
          <b>🇮🇳 Kochi, India</b>
          <p>SBC 3, Thapasya Building, Infopark</p>
          <a href="tel:+914844053219">+91 484 405 3219</a>
        </div>
        <div class="drawer-hub-item">
          <b>🇬🇧 London, UK</b>
          <p>71-75 Shelton Street, Covent Garden</p>
          <a href="tel:+442032909011">+44 203 290 9011</a>
        </div>
      </div>

      <div class="drawer-cta-wrap">
        <a href="#contact" class="btn btn-primary-gradient drawer-btn">Get Started Now</a>
      </div>
    </div>
  </div>
</div>
