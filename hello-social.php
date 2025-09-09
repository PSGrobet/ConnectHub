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
        $user_name = "Sarah Johnson";
        $username = "sarahj_designer";
        $bio = "UX designer | Coffee lover | Dog Mom 🐕";
        $follower_count = 1248;
        $following_count = 892;
        $post_count = 156;
        $is_verified = true;
        $is_online = true;

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
        echo "<div class='profile1-stats'>";

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
        ?>
    </div>
</body>
</html>