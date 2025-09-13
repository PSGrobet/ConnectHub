<?php
/**
 * Social Platform Project - Chapter 1, Lesson 1
 * Our first dynamic social platform page showing user profile information
 */

// Store user profile information in variables
// In a real social platform, this data would come from a database
$username = "alex_coder";
$display_name = "Alex Rivera";
$bio = "Full stack engineer who loves building  cool web apps";
$followers = 892;
$following = 156;
$posts = 47;
$is_verified = true;
$join_date = "March 2023";

// Calculate some dynamic information
// This shows how we can work with our variables
$total_connections = $followers + $following;
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
        <header class="profile-header">
            <!-- Display the user's name dynamically in the heading -->
            <h1>Welcome to <?php echo $display_name; ?>'s Profile</h1>

            <!-- Show verification badge if user is verified -->
            <?php if ($is_verified): ?>
                <span class="verified-badge">✓ Verified</span>
            <?php endif; ?>
        </header>

        <main class="profile-content">
            <div class="profile-info">
                <!-- username with @ symbol like real social platforms -->
                <p class="username">@<?php echo $username; ?></p>

                <!-- user's bio text -->
                <p class="bio"><?php echo $bio; ?></p>

                <!-- Join date information -->
                <p class="join-date">Member since <?php echo $join_date; ?></p>
            </div>

            <div class="profile-stats">
                <h3>Profile statistics</h3>

                <!-- Display follower count -->
                <div class="stat">
                    <strong><?php echo $followers; ?></strong> Followers
                </div>

                <!-- Display following count -->
                <div class="stat">
                    <strong><?php echo $following; ?></strong> Following
                </div>

                <!-- Display post count -->
                <div class="stat">
                    <strong><?php echo $posts; ?></strong> Posts
                </div>

                <!-- Show calculated total connections -->
                <div class="stat">
                    <strong><?php echo $total_connections; ?></strong> Total Connections
                </div>
            </div>

            <div class="dynamic-content">
                <!-- Create a personalized message using string concatenation -->
                <p>
                    <?php
                    echo "Hey there!" . $display_name . "has been active in ConnectHub since " . $join_date . ".";
                    echo "With  " . $followers . " followers and " . $posts . "posts, they're building a great community!";
                    ?>
                </p>
                <?php if ($followers > 500): ?>
                    <p class="achievement">🎉 Popular User Achievement Unlocked!</p>
                <?php else: ?>
                    <p class="encouragement">Keep posting to grow your follower count!</p>
                <?php endif; ?>            
            </div>
        </main>

        <footer class="profile-footer">
            <p>This profile was generated dynamically with PHP on <?php echo date('F j, Y \a\t g:i A'); ?></p>
        </footer>
    </div>
</body>
</html>

    
