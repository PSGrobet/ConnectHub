<?php
/**
 * Social Platfor project - Chapter 1, Lesson 3
 * Miulti-user social feel demonstrating arrays in social platform conteext
 **/

// Simple indexed array for trending hashtags
$trending_hashtags = [
    '#WebDevelopment', '#PHP', '#JavaScript', '#Photography', '#Travel', '#Food', '#Fitness', '#Music', '#Art'
];

// Array of featured usernames
$featured_users = [
    'alex_coder', 'sarah_dev', 'mike_photos', 'jessica_designs', 'tom_writer'
];

// Multidimensional array of user profiles
$users = [
    [
        'id' => 1,
        'username' => 'alex_coder',
        'name' => 'Alex Rivera',
        'bio' => 'Full stack developer passionate about clean code and user experience',
        'followers' => 892,
        'following' => 245,
        'posts' => 47,
        'verified' => true,
        'avatar' => '👨‍💻',
        'join_date' => '2023-03-15',
        'is_online' => true
    ],
    [
        'id' => 2,
        'username' => 'sarah_dev',
        'name' => 'Sarah Johnson',
        'bio' => 'Backend developer who loves PHP and building scalable systems',
        'followers' => 1250,
        'following' => 189,
        'posts' => 63,
        'verified' => true,
        'avatar' => '👩‍💻',
        'join_date' => '2022-11-08',
        'is_online' => false
    ],
    [
        'id' => 3,
        'username' => 'mike_photos',
        'name' => 'Mike Chen',
        'bio' => 'Travel photographer capturing moments around the world 📸',
        'followers' => 3420,
        'following' => 567,
        'posts' => 128,
        'verified' => true,
        'avatar' => '📸',
        'join_date' => '2021-09-22',
        'is_online' => true
    ],
    [
        'id' => 4,
        'username' => 'jessica_designs',
        'name' => 'Jessica Wong',
        'bio' => 'UX/UI Designer creating beautiful and functional user experiences',
        'followers' => 2847,
        'following' => 432,
        'posts' => 156,
        'verified' => false,
        'avatar' => '🎨',
        'join_date' => '2022-05-14',
        'is_online' => true
    ],
    [
        'id' => 5,
        'username' => 'tom_writer',
        'name' => 'Tom Anderson',
        'bio' => 'Tech writer and blogger sharing insights about the digital world',
        'followers' => 567,
        'following' => 123,
        'posts' => 89,
        'verified' => false,
        'avatar' => '✍️',
        'join_date' => '2023-01-10',
        'is_online' => false
    ]
];

// Multidimensional array of recent posts
$recent_posts = [
    [
        'id' => 101,
        'user_id' => 1,
        'username' => 'alex_coder',
        'user_name' => 'Alex Rivera',
        'content' => 'Just deployed my latest PHP project! The new features are working perfectly. Love how clean thhe code turned out. 🚀',
        'timestamp' => '2024-01-15 14:30:00',
        'likes' => 156,
        'comments' => 24,
        'hashtags' => ['#PHP', '#WebDevelopment', '#Coding']
    ],
    [
        'id' => 102,
        'user_id' => 3,
        'username' => 'mike_photos',
        'user_name' => 'Mike Chen',
        'content' => 'Incredible sunset from yesterday\'s hike in the mountains. Nature never fails to amaze me! 🌄',
        'timestamp' => '2024-01-15 12:45:00',
        'likes' => 156,
        'comments' => 24,
        'hashtags' => ['#Photography', '#Travel', '#Nature']
    ],
    [
        'id' => 103,
        'user_id' => 4,
        'username' => 'jessica_designs',
        'user_name' => 'Jessica Wong',
        'content' => 'Working on a new mobile app design. The user research phase revealed some fascinating insights about user behavior!',
        'timestamp' => '2024-01-15 10:20:00',
        'likes' => 89,
        'comments' => 12,
        'hashtags' => ['#Design', '#UX', '#MobileApp']
    ],
    [
        'id' => 104,
        'user_id' => 2,
        'username' => 'sarah_dev',
        'user_name' => 'Sarah Johnson',
        'content' => 'Database optimization can be tricky, but when you get it right, the performance improvements are incredible! 💪',
        'timestamp' => '2024-01-15 09:15:00',
        'likes' => 67,
        'comments' => 15,
        'hashtags' => ['#Database', '#Performance', '#PHP']
    ],
    [
        'id' => 105,
        'user_id' => 5,
        'username' => 'tom_writer',
        'user_name' => 'Tom Anderson',
        'content' => 'Writing my next article about the evolution of web development. The changes in the last 5 years have been remarkable!',
        'timestamp' => '2024-01-15 08:00:00',
        'likes' => 34,
        'comments' => 9,
        'hashtags' => ['#Writing', '#WebDevelopment', '#Tech']
    ]
];

// Calculate some statistics from our arrays
$total_users = count($users);
$total_posts = count($recent_posts);
$total_followers = 0;
foreach ($users as $user) {
    $total_followers += $user['followers'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConnectHub - Social Feed</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Header with platform statistics -->
        <header class="feed-header">
            <h1>🌐 ConnectHub Social Feed</h1>
            <div clas="platform-stats">
                <span class="stat"><?php echo $total_users; ?> Users</span>
                <span class="stat"><?php echo $total_posts; ?> Posts</span>
                <span class="stat"><?php echo number_format($total_followers); ?> Total Followers</span>
            </div>
        </header>

        <!-- Trending Hashtags section -->
        <section class="trending-section">
            <h2>🔥 Trending now</h2>
            <div class="hashtag-list">
                <?php for ($i = 0; $i < 6; $i++): ?>
                    <span class="hashtag"><?php echo $trending_hashtags[$i]; ?></span>
                <?php endfor; ?>
            </div>
        </section>

        <!-- Featured users section -->
        <section class="featured-users">
            <h2>⭐ Featured Users</h2>
            <div class="user-grid">
                <?php foreach ($users as $user): ?>
                    <div class="user-card">
                        <div class="user-avatar"><?php echo $user['avatar']; ?></div>
                        <h3><?php echo $user['name']; ?></h3>
                        <p class="username">@<?php echo $user['username']; ?></p>

                        <!-- Show verification badge if user is verified -->
                        <?php if ($user['verified']): ?>
                            <span class="verified-badge">✓</span>
                        <?php endif; ?>

                        <!-- Online status indicator -->
                        <div class="status-indicator <?php echo $user['is_online'] ? 'online' : 'offline'; ?>">
                            <?php echo $user['is_online'] ? '🟢 Online' : '🔴 Offline'; ?>
                        </div>

                        <p class="user-bio"><?php echo $user['bio']; ?></p>

                        <div class="user-stats">
                            <span><?php echo number_format($user['followers']); ?> followers</span>
                            <span><?php echo $user['posts']; ?> posts</span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <div>
        </section>

        <!-- Recent posts feed -->
        <section class="posts-feed">
            <h2>📝 Recent Posts</h2>
            <?php foreach ($recent_posts as $post): ?>
                <article class="post-card">
                    <header class="post-header">
                        <!-- Find and display user info for this post -->
                        <?php
                        // Find the user who made this post -->
                        $post_author = null;
                        foreach ($users as $user) {
                            if ($user['id'] === $post['user_id']) {
                                $post_author = $user;
                                break;
                            }
                        }
                        ?>

                        <div class="author-info">
                            <span class="author-avatar"><?php echo $post_author['avatar']; ?></span>
                            <div class="author-details">
                                <strong><?php echo $post['user_name']; ?></strong>
                                <span class="username">@<?php echo $post['username']; ?></span>
                                <?php if ($post_author['verified']): ?>
                                    <span class="verified-mini">✓</span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <time class="post-time"><?php echo date('M j, g:i A', strtotime($post['timestamp'])); ?></time>
                    </header>

                    <main class="post-content">
                        <p><?php echo $post['content']; ?></p>

                        <!-- Display hastags for this post -->
                        <div class="post-hashtags">
                            <?php foreach ($post['hashtags'] as $hashtag): ?>
                                <span class="post-hashtag"><?php echo $hashtag; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </main>

                    <footer class="post-footer">
                        <div class="post-stats">
                            <span class="likes">❤️ <?php echo $post['likes']; ?> likes</span>
                            <span class="comments">💬 <?php echo $post['comments']; ?> comments</span>
                        </div>
                    </footer>
                </article>
            <?php endforeach; ?>
        </section>

        <!-- Array demonstration section -->
        <section class="array-demo">
            <h2>🔍 Behind the Scenes: Array Data</h2>

            <div class="demo-grid">
                <div class="demo-card">
                    <h3>Indexed Array Example</h3>
                    <p><strong>Trending Hashtags:</strong></p>
                    <code>
                        $trending_hashtags = [<br>
                        '<?php echo $trending_hashtags[0]; ?>',<br>
                        '<?php echo $trending_hashtags[1]; ?>',<br>
                        '<?php echo $trending_hashtags[2]; ?>'<br>
                        ];
                    </code>
                </div>

                <div class="demo-card">
                    <h3>Associative Array Example</h3>
                    <p><strong>First User Profile:</strong></p>
                    <code>
                        $user = [<br>
                        'name' => '<?php echo $users[0]['name']; ?>',<br>
                        'username' => '<?php echo $users[0]['username']; ?>',<br>
                        'followers' => <?php echo $users[0]['followers']; ?><br>
                        ];
                    </code>
                </div>

                <div class="demo-card">
                    <h3>Multidimensional Array</h3>
                    <p><strong>Multiple Users:</strong></p>
                    <code>
                        $users[0]['name'] = '<?php echo $users[0]['name']; ?>'<br>
                        $users[1]['name'] = '<?php echo $users[1]['name']; ?>'<br>
                        $users[2]['name'] = '<?php echo $users[2]['name']; ?>'
                    </code>
                </div>
            </div>
        </section>

        <footer class="feed-footer">
            <p>
                ConnectHub Social Feed powered by PHP Arrays |
                Displaying <?php echo count($users); ?> users and <?php echo count($recent_posts); ?> posts |
                Generated on <?php echo date('F j, Y \a\t g:i A'); ?>
            </p>
        </footer>
    </div>
</body>
</html>
