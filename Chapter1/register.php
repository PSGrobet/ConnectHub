<?php
/**
 * Social Platform - Chapter 1, Lesson 1.4
 * User Registrations - Form processing and validation
 */

require_once 'functions.php';
$page_title = 'Register - SocialPlatorm';

// Initialize variables
$errors = [];
$success = false;
$form_data = [
    'username' => '',
    'email' => '',
    'full_name' => '',
    'bio' => ''
];

// Process form submission
if ($_POST) {
    // Get form data and trim whitespace
    $form_data['username'] = trim($_POST['username'] ?? '');
    $form_data['email'] = trim($_POST['email'] ?? '');
    $form_data['full_name'] = trim($_POST['full_name'] ?? '');
    $form_data['bio'] = trim($_POST['bio'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    // Validation
    if (empty($form_data['username'])) {
        $errors['username'] = 'Username is required';
    } elseif (strlen($form_data['username']) < 3) {
        $errors['username'] = 'Username must be at least 3 characters';
    } elseif (!preg_match('/^[a-zA-z0-9_]+$/', $form_data['username'])) {
        $errors['username'] = 'User name can only contain letters, numbers and underscore';
    }

    if (empty($form_data['email'])) {
        $errors['email'] = 'Email is required';
    } elseif (!filter_var($form_data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address';
    }

    if (empty($form_data['full_name'])) {
        $errors['full_name'] = 'Full name is required';
    }

    if (empty($password)) {
        $errors['password'] = 'Password is required';
    } elseif (strlen($password) < 6) {
        $errors['password'] = 'Password must be at least 6 characters';
    }

    if ($password !== $confirm_password) {
        $errors['confirm_password'] = 'Passwords do not match';
    }

    // If no errors, "register" the user (in real app, save to database)
    if (empty($errors)) {
        $success = true;
        // Clear form data on success
        $form_data = ['username' => '', 'email' => '', 'full_name' => '', 'bio' => ''];
    }
}

include 'header.php';
?>

        <div class="card">
            <h1 class="title">Create Your Account</h1>
            <p class="text">Join our social platform and connect with developers worldwide</p>

            <?php if ($success): ?>
                <div class="form-success">
                    <strong>Registration successful!</strong> Welcome to the platform, <?php echo htmlspecialchars($_POST['full_name']); ?>!
                </div>
            <?php endif; ?>

            <form method="post" action="register.php">
                <div class="form-group">
                    <label class="label" for="username">Username</label>
                    <input type="text"
                            id="username"
                            name="username"
                            class="input"
                            value="<?php echo htmlspecialchars($form_data['username']); ?>"
                            placeholder="e.g. john_doe">
                    <?php if (isset($errors['username'])): ?>
                        <div class="form-error"><?php echo $errors['username']; ?></div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label class="label" for="email">Email Address</label>
                    <input type="email"
                            id="email"
                            name="email"
                            class="input"
                            value="<?php echo htmlspecialchars($form_data['email']); ?>"
                            placeholder="your@email.com">
                    <?php if (isset($errors['email'])): ?>
                        <div class="form-error"><?php echo $errors['email']; ?></div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label class="label" for="full_name">Full Name</label>
                    <input type="text"
                            id="full_name"
                            name="full_name"
                            class="input"
                            value="<?php echo htmlspecialchars($form_data['full_name']); ?>"
                            placeholder="John Smith">
                    <?php if (isset($errors['full_name'])): ?>
                        <div class="form-error"><?php echo $errors['full_name']; ?></div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                <label class="label" for="bio">Bio (Optional)</label>
                <textarea id="bio"
                    name="bio"
                    class="textarea"
                    placeholder="Tell us about yourself..."><?php echo htmlspecialchars($form_data['bio']); ?></textarea>
                </div>

                <div class="form-group">
                    <label class="label" for="password">Password</label>
                    <input type="password"
                            id="password"
                            name="password"
                            class="input"
                            placeholder="At least 6 characteres">
                    <?php if (isset($errors['password'])): ?>
                        <div class="form-error"><?php echo $errors['password']; ?></div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label class="label" for="confirm_password">Confirm Password</label>
                    <input type="password"
                            id="confirm_password"
                            name="confirm_password"
                            class="input"
                            placeholder="Re-enter your password">
                    <?php if (isset($errors['confirm_password'])): ?>
                        <div class="form-error"><?php echo $errors['confirm_password']; ?></div>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%;">
                    Create Account
                </button>
            </form>

            <div class="text-center" style="margin-top: 20px;">
                <p class="muted">Already have an account? <a href="#" style="color: #007acc;">Sign in here</a></p>
            </div>
        </div>

        <!-- Display submitted data for learning purposes -->
        <?php if ($_POST && !empty($errors)): ?>
            <div class="card">
                <h2 class="title">Debug: Form Data Received</h2>
                <pre class="text" style="background:#1a1a1a; padding: 10px; border-radius: 3px;">
<?php print_r(array_map('htmlspecialchars', $_POST)); ?>
                </pre>
            </div>
        <?php endif; ?>
    </main>
</body>
</html>










