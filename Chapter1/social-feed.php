<?php
/**
 * Social Platform - Chapter 1, Lesson 1.2
 * Social Feed - Demonstrates PHP arrays and loops
 */

// Array of users - simulates user database table
$users = [
    [
        'id' => 1,
        'username' => 'sarah_dev',
        'name' => 'Sarah Johnson',
        'avatar' => 'SJ',
        'verified' => true
    ],
    [
        'id' => 2,
        'username' => 'mike_codes',
        'name' => 'Mike Chen',
        'avatar' => 'MC',
        'verified' => false
    ],
    [
        'id' => 3,
        'username' => 'alex_design',
        'name' => 'Alex Rodriguez',
        'avatar' => 'AR',
        'verified' => true
    ]
];

// Array of posts - simulates posts database table
$posts = [
    [
        'id' => 1,
        'user_id' => 1,
        'content' => 'Just finished building my first PHP social platform! The array and loop concepts are really clicking now. 🚀',
        'timestamp' => '2 hours ago',
        'likes' => 24,
        'comments' => 8
    ],
    [
        'id' => 2,
        'user_id' => 2,
        'content' => 'Anyone else love how PHP arrays work? Coming from other languages, the flexibility is amazing. Working on a new project using associative arrays.',
        'timestamp' => '4 hours ago',
        'likes' => 15,
        'comments' => 3
    ],
    [
        'id' => 3,
        'user_id' => 3,
        'content' => 'Design tip: When building social platforms, keep the UI simple and focus on the content. Dark themes are great for reducing eye strain! 👨‍💻',
        'timestamp' => '6 hours ago',
        'likes' => 42,
        'comments' => 12
    ],
    [
        'id' => 4,
        'user_id' => 1,
        'content' => 'Learning PHP has been such a journey. Arrays and loops make handling data so much easier than I expected!',
        'timestamp' => '8 hours ago',
        'likes' => 18,
        'comments' => 5
    ]
];

// Function to find user by ID
function find_user_by_id($users, $user_id) {
    foreach ($users as $user) {
        if ($user['id'] == $user_id) {
            return $user;
        }
    }
    return null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Feed - Social Platform</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="nav">
        <div class="container">
            <a href="user-profile.php" class="nav-link">Profile</a>
            <a href="social-feed.php" class="nav-link">Feed</a>
            <a href="#" class="nav-link">Messages</a>
            <a href="#" class="nav-link">Settings</a>
        </div>
    </nav>

    <main class="container">
        <div class="card">
            <h1 class="title">Social Feed</h1>
            <p class="text">Latest posts from your network</p>
        </div>

        <!-- Loop through posts and display each one -->
        <?php foreach ($posts as $post): ?>
            <?php
            // Find the user who made this post
            $post_author = find_user_by_id($users, $post['user_id']);
            ?>

            <article class="card">
                <div class="flex">
                    <div class="user-avatar">
                        <?php echo $post_author['avatar']; ?>
                    </div>
                    <div class="user-info">
                        <h3 style="margin: 0; color: #fff; font-size: 1rem;">
                            <?php echo $post_author['name']; ?>
                            <?php if ($post_author['verified']): ?>
                                <span style="color: #007acc;">✓</span>
                            <?php endif; ?>
                        </h3>
                        <p class="muted" style="margin: 0;">
                            @<?php echo $post_author['username']; ?> • <?php echo $post['timestamp']; ?>
                        </p>
                    </div>
                </div>

                <div class="text" style="margin-top: 15px;">
                    <?php echo nl2br($post['content']); ?>
                </div>

                <div class="flex" style="margin-top: 15px; gap: 20px;">
                    <span class="muted">❤️ <?php echo $post['likes']; ?> likes</span>
                    <span class="muted">💬 <?php echo $post['comments']; ?> comments</span>
                    <span class="muted">🔄 Share</span>
                </div>
            </article>
        <?php endforeach; ?>

        <!-- Display users to follow -->
        <div class="card">
            <h2 class="title">Suggested Users</h2>
            <p class="text">Connect with other developers</p>

            <?php foreach ($users as $user): ?>
                <div class="flex" style="margin: 15px 0; padding: 10px; background: #1a1a1a; border-radius: 5px;">
                    <div class="user-avatar" style="width: 40px; height: 40px;">
                        <?php echo $user['avatar']; ?>
                    </div>
                    <div class="user-info">
                        <h4 style="margin: 0; color: #fff; font-size: 0.9rem;">
                            <?php echo $user['name']; ?>
                            <?php if ($user['verified']): ?>
                                <span style="color: #007acc;">✓</span>
                            <?php endif; ?>
                        </h4>
                        <p class="muted" style="margin: 0;">@<?php echo $user['username']; ?></p>
                    </div>
                    <div style="margin-left: auto;">
                        <a href="#" class="btn" style="padding: 5px 10px; font-size: 12px;">Follow</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Display some array statistics -->
        <div class="card">
            <h2 class="title">Platform Statistics</h2>
            <div class="user-stats">
                <div class="stat">
                    <div class="stat-number"><?php echo count($posts); ?></div>
                    <div class="stat-label">Total Posts</div>
                </div>
                <div class="stat">
                    <div class="stat-number"><?php echo count($users); ?></div>
                    <div class="stat-label">Active Users</div>
                </div>
                <div class="stat">
                    <div class="stat-number">
                        <?php
                        // Calculate total likes across all posts
                        $total_likes = 0;
                        foreach ($posts as $post) {
                            $total_likes += $post['likes'];
                        }
                        echo $total_likes;
                        ?>
                    </div>
                    <div class="stat-label">Total Likes</div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
