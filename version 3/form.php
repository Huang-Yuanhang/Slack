<!-- This is form.php -->
<section class="enroll-now-form">
    <h1>Enroll Now</h1>
    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
        <input type="hidden" name="action" value="submit_enrollment_form">
        <p>
            <label for="full-name">Full Name:</label>
            <input type="text" id="full-name" name="full_name" required>
        </p>
        <p>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </p>
        <p>
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone">
        </p>
        <p>
            <label for="course">Course of Interest:</label>
            <select id="course" name="course">
                <option value="science">Science</option>
                <option value="engineering">Engineering</option>
                <option value="arts">Arts</option>
                <!-- Add other courses as needed -->
            </select>
        </p>
        <p>
            <input type="submit" value="Submit">
        </p>
    </form>
</section>
