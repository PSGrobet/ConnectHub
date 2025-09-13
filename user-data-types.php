<?php
/**
 * Social Platform Project - Chapter 1, Lesson 2
 * Demonstrating different data types through a comprehensive user profile
 */

// STRING DATA - Text information about the user
$username = 'jessica_designs';
$display_name = 'Jessica Chen';
$first_name = 'Jessica';
$last_name = 'Chen';
$bio = "UX/UI Designer passionate about creating beautiful, user-friendly experiences. Always learning something new! 🎨";
$location = 'Seattle, WA';
$website = 'https://jessicachen.design';
$job_title = 'Senior UX Designer';
$company = 'TechFlow Studios';

// More complex string data
$favorite_quote = "Design is not just what it looks like and feels like. Design is how it works. - Steve Jobs";
$recent_post = "Just wrapped up an amazing design sprint! Our team created three different prototypes for the new mobile app. Collaboration at its finest! 💪 #design #teamwork";

// INTEGER DATA - Whole numbers for counting
$followers = 2847;
$following = 1205;
$posts = 156;
$likes_received = 38920;
$comments_made = 892;
$age = 29;
$join_year = 2020;
$profile_views = 5643;
$login_streak = 28; // consecutive days

// FLOAT DATA - Numbers with decimals for precise measurements
$average_likes_per_post = 249.6;
$engagement_rate = 7.82; // percentage
$profile_completion = 94.5; // percentage
$user_rating = 4.9; // out of 5 stars from collaborators
$average_response_time = 2.3; // hours for messages
$content_quality_score = 8.7; // out of 10

// BOOLEAN DATA - True/false settings and status
$is_verified = true;
$is_private = false;
$is_online = true;
$is_premium = true;
$is_banned = false;

// User preferences (booleans)
$email_notifications = true;
$push_notifications = false;
$dark_mode = true;
$show_email = false;
$show_phone = false;
$allow_messages_from_strangers = false;
$show_activity_status = true;

// Post and content settings
$allow_comments_on_posts = true;
$allow_post_sharing = true;
$watermark_images = true;

// Calculate some derived values using different data types
$total_interactions = $likes_received + $comments_made; // integer math
$years_active = 2024 - $join_year; // integer calculation
$likes_per_follower = round($likes_received / $followers, 2); // float calculation
$is_power_user = ($followers > 1000 && $posts > 100); // boolean logic
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $display_name; ?> - ConnectHub Profile</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<!-- Profile Header Section -->
<header class="profile-header">
<div class="header-content">
<h1><?php echo $display_name; ?></h1>
<p class="username">@<?php echo $username; ?></p>

<!-- Boolean data controls what badges show -->
<div class="badges">
<?php if ($is_verified): ?>
<span class="badge verified">✓ Verified</span>
<?php endif; ?>

<?php if ($is_premium): ?>
<span class="badge premium">⭐ Premium</span>
<?php endif; ?>

<?php if ($is_power_user): ?>
<span class="badge power-user">🚀 Power User</span>
<?php endif; ?>

<!-- Online status using boolean -->
<span class="status-indicator <?php echo $is_online ? 'online' : 'offline'; ?>">
<?php echo $is_online ? 'Online' : 'Offline'; ?>
</span>
</div>
</div>
</header>

<!-- Personal Information Section -->
<main class="profile-content">
<section class="personal-info">
<h2>About <?php echo $first_name; ?></h2>

<!-- String data display -->
<div class="info-grid">
<div class="info-item">
<strong>Bio:</strong>
<p><?php echo $bio; ?></p>
</div>

<div class="info-item">
<strong>Location:</strong>
<span><?php echo $location; ?></span>
</div>

<div class="info-item">
<strong>Job:</strong>
<span><?php echo $job_title; ?> at <?php echo $company; ?></span>
</div>

<div class="info-item">
<strong>Website:</strong>
<a href="<?php echo $website; ?>" target="_blank"><?php echo $website; ?></a>
</div>

<!-- Integer data display -->
<div class="info-item">
<strong>Age:</strong>
<span><?php echo $age; ?> years old</span>
</div>

<div class="info-item">
<strong>Member Since:</strong>
<span><?php echo $join_year; ?> (<?php echo $years_active; ?> years active)</span>
</div>
</div>
</section>

<!-- Statistics Section - Mixing integers and floats -->
<section class="statistics">
<h2>Profile Statistics</h2>

<div class="stats-grid">
<!-- Basic counts (integers) -->
<div class="stat-card">
<h3><?php echo number_format($followers); ?></h3>
<p>Followers</p>
</div>

<div class="stat-card">
<h3><?php echo number_format($following); ?></h3>
<p>Following</p>
</div>

<div class="stat-card">
<h3><?php echo $posts; ?></h3>
<p>Posts</p>
</div>

<div class="stat-card">
<h3><?php echo number_format($likes_received); ?></h3>
<p>Likes Received</p>
</div>
</div>

<!-- Advanced metrics (floats) -->
<div class="advanced-stats">
<h3>Engagement Metrics</h3>

<div class="metric">
<span>Average likes per post:</span>
<strong><?php echo $average_likes_per_post; ?></strong>
</div>

<div class="metric">
<span>Engagement rate:</span>
<strong><?php echo $engagement_rate; ?>%</strong>
</div>

<div class="metric">
<span>Profile completion:</span>
<strong><?php echo $profile_completion; ?>%</strong>
</div>

<div class="metric">
<span>User rating:</span>
<strong><?php echo $user_rating; ?>/5.0 ⭐</strong>
</div>

<div class="metric">
<span>Likes per follower:</span>
<strong><?php echo $likes_per_follower; ?></strong>
</div>
</div>
</section>

<!-- Privacy Settings Section - Boolean showcase -->
<section class="privacy-settings">
<h2>Account Settings</h2>

<div class="settings-grid">
<div class="setting-item">
<span>Profile Privacy:</span>
<strong><?php echo $is_private ? 'Private' : 'Public'; ?></strong>
</div>

<div class="setting-item">
<span>Email Notifications:</span>
<strong><?php echo $email_notifications ? 'Enabled' : 'Disabled'; ?></strong>
</div>

<div class="setting-item">
<span>Push Notifications:</span>
<strong><?php echo $push_notifications ? 'Enabled' : 'Disabled'; ?></strong>
</div>

<div class="setting-item">
<span>Dark Mode:</span>
<strong><?php echo $dark_mode ? 'On' : 'Off'; ?></strong>
</div>

<div class="setting-item">
<span>Show Email:</span>
<strong><?php echo $show_email ? 'Public' : 'Hidden'; ?></strong>
</div>

<div class="setting-item">
<span>Allow Messages from Strangers:</span>
<strong><?php echo $allow_messages_from_strangers ? 'Yes' : 'No'; ?></strong>
</div>
</div>
</section>

<!-- Recent Activity - String content -->
<section class="recent-activity">
<h2>Recent Activity</h2>

<div class="activity-item">
<h4>Latest Post</h4>
<p><?php echo $recent_post; ?></p>
<small>Posted <?php echo $login_streak; ?> days ago</small>
</div>

<div class="activity-item">
<h4>Favorite Quote</h4>
<blockquote><?php echo $favorite_quote; ?></blockquote>
</div>

<!-- Dynamic message using all data types -->
<div class="activity-item">
<h4>Profile Summary</h4>
<p>
<?php
echo $display_name . " is a " . $age . "-year-old " . $job_title . " from " . $location . ". ";
echo "With " . number_format($followers) . " followers and an engagement rate of " . $engagement_rate . "%, ";
echo $first_name . " is definitely making an impact! ";

if ($is_verified && $is_premium) {
    echo "As a verified premium member, they have access to all platform features.";
} elseif ($is_verified) {
    echo "Their verified status shows they're a trusted member of our community.";
} else {
    echo "They're building their reputation in our community.";
}
?>
</p>
</div>
</section>
</main>

<footer class="profile-footer">
<p>
Profile data types:
<span class="data-type">Strings</span>,
<span class="data-type">Integers</span>,
<span class="data-type">Floats</span>,
<span class="data-type">Booleans</span> |
Generated on <?php echo date('F j, Y \a\t g:i A'); ?>
</p>
</footer>
</div>
</body>
</html>
