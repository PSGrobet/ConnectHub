<?php
/**
 * Social Platform - Chapter 1, Lesson 1.1
 * User Profile Page - Demonstrates PHP variables and basic syntax
 */

// PHP variables storing user information
// In real applications, this data would come from a database
$username = "sarah_dev";
$full_name = "Sarah Johnson";
$bio = "Full-stack developer who loves building social platforms with PHP!";
$post_count = 127;
$follower_count = 2456;
$following_count = 189;
$join_date = "March 2024";
$is_verified = true;
$location = "San Francisco, CA";

// Calculate some dynamic values
$total_interactions = $post_count + $follower_count;
$account_age_months = 8; // Could be calculated from join_date

// Create user's initials for avatar
$initials = substr($full_name, 0, 1) . substr(strstr($full_name, ' '), 1, 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $full_name; ?> - Social Platform</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="nav">
        <div class="container">
            <a href="#" class="nav-link">Home</a>
            <a href="#" class="nav-link">Profile</a>
            <a href="#" class="nav-link">Messages</a>
            <a href="#" class="nav-link">Settings</a>
        </div>
    </nav>

    <main class="container">
        <div class="card">
            <h1 class="title">User Profile</h1>

            <div class="user-profile">
                <div class="flex">
                    <div class="user-avatar">
                        <?php echo $initials; ?>
                    </div>
                    <div class="user-info">
                        <h2 class="title">
                            <?php echo $full_name; ?>
                            <?php if ($is_verified): ?>
                                <span style="color: #007acc;">✓</span>
                            <?php endif; ?>
                        </h2>
                        <p class="muted">@<?php echo $username; ?></p>
                        <p class="text"><?php echo $bio; ?></p>
                        <p class="muted">📍 <?php echo $location; ?> • Joined <?php echo $join_date; ?></p>
                    </div>
                </div>

                <div class="user-stats">
                    <div class="stat">
                        <div class="stat-number"><?php echo $post_count; ?></div>
                        <div class="stat-label">Posts</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number"><?php echo number_format($follower_count); ?></div>
                        <div class="stat-label">Followers</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number"><?php echo $following_count; ?></div>
                        <div class="stat-label">Following</div>
                    </div>
                </div>

                <div class="text-center" style="margin-top: 20px;">
                    <a href="#" class="btn btn-primary">Follow</a>
                    <a href="#" class="btn">Message</a>
                </div>
            </div>

            <!-- Additional info card -->
            <div class="card">
                <h3 class="title">Account Statistics</h3>
                <div class="text">
                    <p><strong>Account Activity:</strong> <?php echo number_format($total_interactions); ?> total interactions</p>
                    <p><strong>Member Since:</strong> <?php echo $account_age_months; ?> months ago</p>
                    <p><strong>Account Status:</strong>
                        <?php if ($is_verified): ?>
                            <span class="success">Verified Account</span>
                        <?php else: ?>
                            <span class="muted">Regular Account</span>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
