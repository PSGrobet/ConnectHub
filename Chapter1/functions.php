<?php
/**
 * Social Platform - Chapter 1, Lesson 1.3
 * Shared Functions - Reusable components for the platform
 */

/**
 * Format a user's display name with verification badge
 */
function display_user_name($name, $is_verified = false) {
    $output = htmlspecialchars($name);
    if ($is_verified) {
        $output .= ' <span style="color: #007acc;">✓</span>';
    }
    return $output;
}

/**
 * Format post timestamp into readable format
 */
function format_time_ago($timestamp) {
    // Simple time ago calculation
    $time_formats = [
        '1 minute ago', '2 minutes ago', '5 minutes ago',
        '15 minutes ago', '30 minutes ago', '1 hour ago',
        '2 hours ago', '4 hours ago', '6 hours ago', '8 hours ago'
    ];

    // For demo purposes, return the timestamp as-is if it's already formatted
    if (strpos($timestamp, 'ago') !== false) {
        return $timestamp;
    }

    // Otherwise return a random time ago for demo
    return $time_formats[array_rand($time_formats)];
}

/**
 * Generate user avatar initials
 */
function get_user_initials($full_name) {
    $names = explode(' ', trim($full_name));
    $initials = '';

    foreach ($names as $name) {
        if (!empty($name)) {
            $initials .= strtoupper($name[0]);
            if (strlen($initials) >= 2) break; // Max 2 initials
        }
    }

    return $initials ?: '?';
}

/**
 * Calculate engagement rate for a post
 */
function calculate_engagement($likes, $comments, $shares = 0) {
    return $likes + ($comments * 2) + ($shares * 3);
}

/**
 * Format numbers with K/M suffixes
 */
function format_number($number) {
    if ($number >= 1000000) {
        return round($number / 1000000, 1) . 'M';
    } elseif ($number >= 1000) {
        return round($number / 1000, 1) . 'K';
    }
    return number_format($number);
}

/**
 * Truncate text to specified length
 */
function truncate_text($text, $length = 100) {
    if (strlen($text) <= $length) {
        return $text;
    }
    return substr($text, 0, $length) . '...';
}

/**
 * Display post engagement stats
 */
function display_post_stats($likes, $comments, $shares = 0) {
    $stats = [];

    if ($likes > 0) {
        $stats[] = "❤️ " . format_number($likes) . " likes";
    }
    if ($comments > 0) {
        $stats[] = "💬 " . format_number($comments) . " comments";
    }
    if ($shares > 0) {
        $stats[] = "🔄 " . format_number($shares) . " shares";
    }

    return implode(' • ', $stats);
}
?>
