<?php
/**
 * Social Platform - Chapter 1, Lesson 1.3
 * Shared Header Component
 */

// Make sure functions are available
require_once 'functions.php';

// Current user info (in real app, this would come from session/database)
$current_user = [
    'name' => 'Your Name',
    'username' => 'your_username',
    'avatar' => get_user_initials('Your Name'),
    'notifications' => 3
];

$page_title = isset($page_title) ? $page_title : 'Social Platform';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="nav">
        <div class="container flex">
            <div>
                <a href="dashboard.php" class="nav-link" style="font-weight: bold;">SocialHub</a>
                <a href="dashboard.php" class="nav-link">Feed</a>
                <a href="user-profile.php" class="nav-link">Profile</a>
                <a href="#" class="nav-link">Messages</a>
                <a href="#" class="nav-link">Search</a>
            </div>
            <div style="margin-left: auto;" class="flex">
                <?php if ($current_user['notifications'] > 0): ?>
                    <a href="#" class="nav-link">
                        🔔 <?php echo $current_user['notifications']; ?>
                    </a>
                <?php endif; ?>
                <a href="#" class="nav-link flex">
                    <div class="user-avatar" style="width: 25px; height: 25px; font-size: 12px;">
                        <?php echo $current_user['avatar']; ?>
                    </div>
                    <?php echo $current_user['username']; ?>
                </a>
            </div>
        </div>
    </nav>

    <main class="container">
