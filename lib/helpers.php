<?php
/**
 * Helper functions for the CT Landing website
 */

/**
 * Create a safe URL string (slug) from a title
 * 
 * @param string $text The text to convert to a slug
 * @return string The slugified text
 */
function create_slug($text) {
    // Replace non-alphanumeric characters with hyphens
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    // Transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    // Remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);
    // Trim
    $text = trim($text, '-');
    // Remove duplicate hyphens
    $text = preg_replace('~-+~', '-', $text);
    // Lowercase
    $text = strtolower($text);
    
    return $text;
}

/**
 * Format a date
 * 
 * @param string $date The date string
 * @param string $format The format to use (default: 'F j, Y')
 * @return string The formatted date
 */
function format_date($date, $format = 'F j, Y') {
    $timestamp = strtotime($date);
    return date($format, $timestamp);
}

/**
 * Create an excerpt from content
 * 
 * @param string $content The content to create an excerpt from
 * @param int $length The maximum length of the excerpt (default: 150)
 * @return string The excerpt
 */
function create_excerpt($content, $length = 150) {
    // Strip tags and shorten
    $excerpt = strip_tags($content);
    if (strlen($excerpt) > $length) {
        $excerpt = substr($excerpt, 0, $length) . '...';
    }
    return $excerpt;
}

/**
 * Check if a URL is active
 * 
 * @param string $url The URL to check
 * @return bool Whether the URL is active
 */
function is_active_url($url) {
    return (strpos($_SERVER['REQUEST_URI'], $url) !== false);
}

/**
 * Format a phone number
 * 
 * @param string $phone The phone number to format
 * @return string The formatted phone number
 */
function format_phone($phone) {
    // Remove non-numeric characters
    $phone = preg_replace('/[^0-9]/', '', $phone);
    
    // Format as +91 12345-67890
    if (strlen($phone) === 10) {
        return '+91 ' . substr($phone, 0, 5) . '-' . substr($phone, 5);
    }
    
    return $phone;
}

/**
 * Get the first image from content
 * 
 * @param string $content The content to get the image from
 * @return string|false The image URL or false if no image is found
 */
function get_first_image($content) {
    preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $content, $matches);
    return $matches['src'] ?? false;
}

/**
 * Validate email address
 * 
 * @param string $email The email to validate
 * @return bool Whether the email is valid
 */
function is_valid_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}
?>