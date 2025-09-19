<?php
/**
 * Social Platform - Chapter 1, Lesson 1.3
 * Dashboard - Main social feed using functions and includes
 */

// Set page title for header
$page_title = 'Dashboard - Social Platform';

// Sample data (same as lesson 1.2 but we'll process it with functions)
$users = [
    ['id' => 1, 'username' => 'sarah_dev', 'name' => 'Sarah Johnson', 'verified' => true],
    ['id' => 2, 'username' => 'mike_codes', 'name' => 'Mike Chen', 'verified' => false],
    ['id' => 3, 'username' => 'alex_design', 'name' => 'Alex Rodriguez', 'verified' => true]
];

$posts = [
    [
        'id' => 1, 'user_id' => 1, 'likes' => 24, 'comments' => 8, 'shares' => 3,
        'content' => 'Just finished building my first PHP social platform! The functions and includes are making everything so much cleaner. 🚀',
        'timestamp' => '2024-01-15 14:30:00'
    ],
    [
        'id' => 2, 'user_id' => 2, 'likes' => 1200, 'comments' => 45, 'shares' => 12,
        'content' => 'PHP functions are game-changers! Writing reusable code feels so much more professional.',
        'timestamp' => '2024-01-15 12:15:00'
    ],
    [
        'id' => 3, 'user_id' => 3, 'likes' => 5600, 'comments' => 89, 'shares' => 23,
        'content' => 'Clean code principles in PHP: use functions, organize with includes, and always think about reusability! 👨‍💻',
        'timestamp' => '2024-01-15 10:45:00'
    ]
];

// Include header with navigation
include 'header.php';
?>

        <div class="card">
            <h1 class="title">Welcome Back!</h1>
            <p class="text">Here's what's happening in your network</p>
        </div>

        <!-- Loop through posts using our new functions -->
        <?php foreach ($posts as $post): ?>
            <?php
            // Find post author using our existing logic
            $author = null;
            foreach ($users as $user) {
                if ($user['id'] == $post['user_id']) {
                    $author = $user;
                    break;
                }
            }
            ?>

            <article class="card">
                <div class="flex">
                    <div class="user-avatar">
                        <?php echo get_user_initials($author['name']); ?>
                    </div>
                    <div class="user-info">
                        <h3 style="margin: 0; color: #fff; font-size: 1rem;">
                            <?php echo display_user_name($author['name'], $author['verified']); ?>
                        </h3>
                        <p class="muted" style="margin: 0;">
                            @<?php echo $author['username']; ?> • <?php echo format_time_ago($post['timestamp']); ?>
                        </p>
                    </div>
                    <div style="margin-left: auto;" class="muted">
                        Engagement: <?php echo calculate_engagement($post['likes'], $post['comments'], $post['shares']); ?>
                    </div>
                </div>

                <div class="text" style="margin-top: 15px;">
                    <?php echo nl2br(htmlspecialchars($post['content'])); ?>
                </div>

                <div class="muted" style="margin-top: 15px;">
                    <?php echo display_post_stats($post['likes'], $post['comments'], $post['shares']); ?>
                </div>
            </article>
        <?php endforeach; ?>

        <!-- Quick stats using functions -->
        <div class="card">
            <h2 class="title">Platform Activity</h2>
            <div class="user-stats">
                <div class="stat">
                    <div class="stat-number"><?php echo count($posts); ?></div>
                    <div class="stat-label">Recent Posts</div>
                </div>
                <div class="stat">
                    <div class="stat-number"><?php echo count($users); ?></div>
                    <div class="stat-label">Active Users</div>
                </div>
                <div class="stat">
                    <div class="stat-number">
                        <?php
                        $total_engagement = 0;
                        foreach ($posts as $post) {
                            $total_engagement += calculate_engagement($post['likes'], $post['comments'], $post['shares']);
                        }
                        echo format_number($total_engagement);
                        ?>
                    </div>
                    <div class="stat-label">Total Engagement</div>
                </div>
            </div>
        </div>

    </main>
</body>
</html>
