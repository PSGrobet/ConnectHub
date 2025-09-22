<?php
/**
 * Social Platform - Chapter 1, Lesson 1.4
 * Create Post - Form for adding new posts
 */

require_once 'functions.php';
$page_title = 'Create Post - Social Platform';

// Initialize variables
$errors = [];
$success = false;
$post_content = '';

// Process form submission
if ($_POST) {
    $post_content = trim($_POST['content'] ?? '');

    // Validation
    if (empty($post_content)) {
        $errors['content'] = 'Post content is required';
    } elseif (strlen($post_content) < 10) {
        $errors['content'] = 'Post must be at least 10 characters long';
    } elseif (strlen($post_content) > 500) {
        $errors['content'] = 'Post cannot exceed 500 characters';
    }

    // If no errors, "create" the post
    if (empty($errors)) {
        $success = true;
        $post_content = ''; // Clear form on success
    }
}

include 'header.php';
?>

        <div class="card">
            <h1 class="title">Create New Post</h1>
            <p class="text">Share your thoughts with the community</p>

            <?php if ($success): ?>
                <div class="form-success">
                    <strong>Post created successfully!</strong> Your post has been added to your feed.
                </div>
            <?php endif; ?>

            <form method="post" action="create-post.php">
                <div class="form-group">
                    <label class="label" for="content">What's on your mind?</label>
                    <textarea id="content"
                              name="content"
                              class="textarea"
                              style="min-height: 120px;"
                              placeholder="Share your thoughts, ask a question, or start a discussion..."><?php echo htmlspecialchars($post_content); ?></textarea>

                    <div style="margin-top: 5px;" class="flex">
                        <span class="muted">
                            Characters: <span id="char-count">0</span>/500
                        </span>
                        <div style="margin-left: auto;">
                            <?php if (isset($errors['content'])): ?>
                                <span class="form-error"><?php echo $errors['content']; ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        📝 Publish Post
                    </button>
                    <a href="dashboard.php" class="btn" style="margin-left: 10px;">Cancel</a>
                </div>
            </form>
        </div>

        <!-- Recent posts preview -->
        <div class="card">
            <h2 class="title">Your Recent Posts</h2>
            <p class="muted">Posts you've created will appear here</p>

            <?php if ($success && $_POST): ?>
                <!-- Show the "new" post -->
                <div class="card" style="background: #1a4a1a; border: 1px solid #4a7c4a;">
                    <div class="flex">
                        <div class="user-avatar">
                            <?php echo get_user_initials('Your Name'); ?>
                        </div>
                        <div class="user-info">
                            <h4 style="margin: 0; color: #fff;">Your Name</h4>
                            <p class="muted" style="margin: 0;">@your_username • just now</p>
                        </div>
                    </div>
                    <div class="text" style="margin-top: 15px;">
                        <?php echo nl2br(htmlspecialchars($_POST['content'])); ?>
                    </div>
                    <div class="muted" style="margin-top: 10px;">

                    </div>
                </div>
            <?php endif; ?>

            <div class="text-center">
                <p class="muted">No posts yet. Create your first post above!</p>
            </div>
        </div>

    <script>
        // Character counter for textarea
        const textarea = document.getElementById('content');
        const charCount = document.getElementById('char-count');

        if (textarea && charCount) {
            // Update count on page load
            charCount.textContent = textarea.value.length;

            // Update count as user types
            textarea.addEventListener('input', function() {
                charCount.textContent = this.value.length;

                // Change color based on length
                if (this.value.length > 450) {
                    charCount.style.color = '#ff6b6b';
                } else if (this.value.length > 400) {
                    charCount.style.color = '#ffd43b';
                } else {
                    charCount.style.color = '#888';
                }
            });
        }
    </script>

    </main>
</body>
</html>
