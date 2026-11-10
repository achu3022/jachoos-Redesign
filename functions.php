<?php
/**
 * JachOOs Corporate Theme Functions & Definitions
 *
 * @package JachOOs
 * @version 2.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

define('JACHOOS_VERSION', '2.4.0');
define('JACHOOS_DIR', get_template_directory());
define('JACHOOS_URI', get_template_directory_uri());

/**
 * Theme Setup
 */
function jachoos_setup() {
    load_theme_textdomain('jachoos', JACHOOS_DIR . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 220,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    add_theme_support('responsive-embeds');

    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'jachoos'),
        'footer'  => __('Footer Navigation', 'jachoos'),
    ));
}
add_action('after_setup_theme', 'jachoos_setup');

/**
 * Enqueue Theme Assets
 */
function jachoos_enqueue_assets() {
    // Google Fonts (Outfit: Modern Geometric Display/Headings + Plus Jakarta Sans: High-Legibility Body + Space Grotesk: Tech Accents)
    wp_enqueue_style(
        'jachoos-fonts',
        'https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=Space+Grotesk:wght@500;600;700&display=swap',
        array(),
        null
    );

    // Main Theme Stylesheet
    wp_enqueue_style('jachoos-style', get_stylesheet_uri(), array(), JACHOOS_VERSION);

    // Compiled Production CSS
    wp_enqueue_style(
        'jachoos-main',
        JACHOOS_URI . '/assets/css/main.css',
        array('jachoos-style'),
        JACHOOS_VERSION
    );

    // Interactive JS (Hero Slider, Navigation, Project Tabs, Testimonial Controls)
    wp_enqueue_script(
        'jachoos-main',
        JACHOOS_URI . '/assets/js/main.js',
        array(),
        JACHOOS_VERSION,
        true
    );

    // Localize Script for AJAX / Paths
    wp_localize_script('jachoos-main', 'jachoosData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'themeUrl' => JACHOOS_URI,
    ));
}
add_action('wp_enqueue_scripts', 'jachoos_enqueue_assets');

/**
 * Helper: Retrieve Theme Option or Default
 */
function jachoos_get_option($key, $default = '') {
    return get_theme_mod('jachoos_' . $key, $default);
}

/**
 * Contact & Quote Form Submission Handler
 */
function jachoos_handle_contact_submission() {
    if (!isset($_POST['jachoos_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['jachoos_nonce'])), 'jachoos_contact_action')) {
        wp_safe_redirect(add_query_arg('quote_status', 'invalid_nonce', wp_get_referer() ?: home_url('/#contact')));
        exit;
    }

    $name    = sanitize_text_field(wp_unslash($_POST['name'] ?? ''));
    $email   = sanitize_email(wp_unslash($_POST['email'] ?? ''));
    $phone   = sanitize_text_field(wp_unslash($_POST['phone'] ?? ''));
    $company = sanitize_text_field(wp_unslash($_POST['company'] ?? ''));
    $service = sanitize_text_field(wp_unslash($_POST['service'] ?? ''));
    $message = sanitize_textarea_field(wp_unslash($_POST['message'] ?? ''));

    if (empty($name) || !is_email($email) || empty($message)) {
        wp_safe_redirect(add_query_arg('quote_status', 'missing_fields', wp_get_referer() ?: home_url('/#contact')));
        exit;
    }

    $to = sanitize_email(jachoos_get_option('contact_email', 'info@jachoos.com'));
    $subject = sprintf('[JachOOs Enquiry] New Project Request from %s', $name);

    $body  = "You have received a new consultation enquiry via JachOOs Corporate Website:\n\n";
    $body .= "Full Name: {$name}\n";
    $body .= "Email: {$email}\n";
    $body .= "Phone: {$phone}\n";
    $body .= "Company: {$company}\n";
    $body .= "Service Required: {$service}\n\n";
    $body .= "Project Details / Message:\n{$message}\n\n";
    $body .= "Submitted on: " . current_time('mysql') . "\n";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    $sent = wp_mail($to, $subject, $body, $headers);

    $status = $sent ? 'success' : 'error';
    wp_safe_redirect(add_query_arg('quote_status', $status, wp_get_referer() ?: home_url('/#contact')));
    exit;
}
add_action('admin_post_nopriv_jachoos_contact', 'jachoos_handle_contact_submission');
add_action('admin_post_jachoos_contact', 'jachoos_handle_contact_submission');

/**
 * Filter Excerpt Length
 */
function jachoos_custom_excerpt_length($length) {
    return 24;
}
add_filter('excerpt_length', 'jachoos_custom_excerpt_length', 999);

