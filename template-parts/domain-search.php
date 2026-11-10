<?php
/**
 * Domain Search & Hosting Promo Section Template Part
 
 *
 * @package JachOOs
 */
?>
<section class="section domain-search-section" id="domain-search">
  <div class="container">
    <div class="domain-card-wrap">
      <div class="domain-header text-center">
        <span class="domain-promo-badge">
          <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <span>FREE domain name with business cloud hosting packages</span>
        </span>
        <h2 class="domain-title">
          Host Your Business With Us &mdash; <span class="highlight-text">Search For Your Domain Now!</span>
        </h2>
        <p class="domain-tagline">Create your pro web presence in no time.</p>
      </div>

      <!-- Domain Search Action Tabs -->
      <div class="domain-tabs-nav">
        <button class="domain-tab-btn active" type="button" data-type="register">Register Domain</button>
        <button class="domain-tab-btn" type="button" data-type="transfer">Transfer Domain</button>
      </div>

      <!-- Domain Search Input Form -->
      <form class="domain-search-form" action="https://www.jachoos.com/cloud-business-hosting" method="get" target="_blank" rel="noopener">
        <div class="domain-input-group">
          <div class="domain-search-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
          </div>
          <input 
            type="text" 
            name="domain" 
            class="domain-input" 
            placeholder="Enter your ideal domain name (e.g. mycompany)" 
            required 
            aria-label="Domain Name Search"
          >
          <div class="domain-select-tld">
            <select name="tld" class="domain-tld-dropdown" aria-label="Domain Extension">
              <option value=".com">.com</option>
              <option value=".net">.net</option>
              <option value=".org">.org</option>
              <option value=".ae">.ae (UAE)</option>
              <option value=".in">.in (India)</option>
              <option value=".co.uk">.co.uk (UK)</option>
              <option value=".cloud">.cloud</option>
              <option value=".io">.io</option>
            </select>
          </div>
          <button type="submit" class="btn btn-domain-search">
            <span>Search Domain</span>
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </button>
        </div>
      </form>

      <!-- Pricing Chips -->
      <div class="domain-tld-chips">
        <span class="tld-item"><b class="tld-ext">.COM</b> <span class="tld-price">Best Value</span></span>
        <span class="tld-item"><b class="tld-ext">.AE</b> <span class="tld-price">UAE Corporate</span></span>
        <span class="tld-item"><b class="tld-ext">.IN</b> <span class="tld-price">Fast Growing</span></span>
        <span class="tld-item"><b class="tld-ext">.CO.UK</b> <span class="tld-price">UK Presence</span></span>
        <span class="tld-item"><b class="tld-ext">.ORG</b> <span class="tld-price">Trusted Trustmark</span></span>
        <span class="tld-item"><b class="tld-ext">.NET</b> <span class="tld-price">Global Network</span></span>
      </div>
    </div>
  </div>
</section>

