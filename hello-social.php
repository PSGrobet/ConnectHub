<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConnectHub - User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .profile-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .profile-header {
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        .stat {
            display: inline-block;
            margin-right: 30px;
            text-align: center;
        }
        .stat-number {
            font-size: 24px;
            font-weight: bold;
            color: #1877f2;
        }
        .stat-label {
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <?php
        /**
         * Social Platform Project - Chapter 1, Lesson 1.1 
         * Basic user profile display using PHP variables
         */

        // User information variables
        // Sarah Johnson
        /*
        $user_name = "Sarah Johnson";
        $username = "sarahj_designer";
        $bio = "UX designer | Coffee lover | Dog Mom 🐕";
        $follower_count = 1248;
        $following_count = 892;
        $post_count = 156;
        $is_verified = true;
        $is_online = true;
        */

        // Alex Chen
        /*
        $user_name = "Alex Chen";
        $username = "alexcodes";
        $bio = "Full-stack developer | Building the future one line of code at a time.";
        $follower_count = 42;
        $following_count = 127;
        $post_count = 8;
        $is_verified = false;
        $is_online = false;
        */

        // Emma Rodriguez
        
        $user_name = "Emma Rodriguez";
        $username = "emmatravels";
        $bio = "Travel photographer | 📸 Capturing moments around the world";
        $follower_count = 15420;
        $following_count = 2341;
        $post_count = 947;
        $is_verified = true;
        $is_online = false;
        

        // Display the profile header
        echo "<div class='profile-header'>";
            echo "<h1>" . $user_name;

            // Show verification badge if user is verified
            if ($is_verified){
                echo " ✓";
            }
            echo "</h1>";

            echo "<p>@" . $username . "</p>";
            echo "<p>" . $bio . "</p>";
        echo "</div>";

        // Display profile statistics
        echo "<div class='profile-stats'>";

            echo "<div class='stat'>";
            echo "<div class='stat-number'>" . $post_count . "</div>";
            echo "<div class='stat-label'>Posts</div>";
            echo "</div>";

            echo "<div class='stat'>";
            echo "<div class='stat-number'>" . $follower_count . "</div>";
            echo "<div class='stat-label'>Followers</div>";
            echo "</div>";

            echo "<div class='stat'>";
            echo "<div class='stat-number'>" . $following_count . "</div>";
            echo "<div class='stat-label'>Following</div>";
            echo "</div>";

        echo "</div>";

        echo "<div class='user-status' style='margin-top: 20px; paddig: 15px; background: #f8f9fa; border-radius: 5px;'>";
        
            echo "<h3>Account Status</h3>";

            // Show online status
            if ($is_online) {
                echo "<p style='color:green;'>🟢 Currently Online</p>";
            } else {
                echo "<p style='color: gray;'>⚫ Offline</p>";
            }

            // Show verification status
            if ($is_verified) {
                echo "<p style='color: blue;'>✅ Verified Account</p>";
            } else {
                echo "<p style='color: orange;'>⚠️ Unverified Account</p>";
            }

        echo "</div>";
        ?>
    </div>
</body>
</html>