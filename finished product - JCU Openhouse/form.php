<!-- This is form.php -->
<section class="enroll-now-form">

    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
        <!-- Personal Details Section -->
        <h2>Personal Details</h2>
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone">

        <label for="HE">Highest Education:</label>
        <input type="text" id="highesteduc" name="highesteduc">

        <!-- Course Selection Section -->
        <h2>Course Selection</h2>
        <label for="course">Course of interest:</label>
        <select id="course" name="course" required>
            <option value="">-- Please Select --</option>
            <!-- University Foundation Level -->
            <option value="elpp">English Language Preparatory Program (ELPP)</option>
            <option value="foundation-arts">Foundation in Arts</option>
            <option value="foundation-science">Foundation in Science</option>

            <!-- Undergraduate/Bachelor's Level -->
            <option value="bachelor-science">Bachelor of Science</option>
            <option value="bachelor-engineering">Bachelor of Engineering</option>
            <option value="bachelor-arts">Bachelor of Arts</option>
            <option value="bachelor-business">Bachelor of Business</option>
            <option value="bachelor-law">Bachelor of Law</option>
            <option value="bachelor-education">Bachelor of Education</option>
            <option value="bachelor-computer-science">Bachelor of Computer Science</option>
            <option value="bachelor-nursing">Bachelor of Nursing</option>

            <!-- Postgraduate/Master's Level -->
            <option value="masters-business-administration">Master of Business Administration (MBA)</option>
            <option value="masters-computer-science">Master of Computer Science</option>
            <option value="masters-engineering">Master of Engineering</option>
            <option value="masters-science">Master of Science</option>
            <option value="masters-arts">Master of Arts</option>
            <option value="masters-public-health">Master of Public Health</option>
            <option value="masters-education">Master of Education</option>

            <!-- Doctorate/Ph.D. Level -->
            <option value="phd-science">Doctor of Philosophy in Science</option>
            <option value="phd-engineering">Doctor of Philosophy in Engineering</option>
            <option value="phd-arts">Doctor of Philosophy in Arts</option>
            <option value="phd-business">Doctor of Philosophy in Business</option>
            <option value="phd-education">Doctor of Philosophy in Education</option>
            <option value="phd-computer-science">Doctor of Philosophy in Computer Science</option>

        </select>

        <!-- Submit Button -->
        <input type="submit" value="Register Now">
    </form>

</section>
