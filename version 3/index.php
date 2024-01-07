<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package version2
 */

get_header();
?>

	<main id="primary" class="site-main">
        <!-- Hero Section -->
        <section class="home-hero">
            <h1>Welcome to James Cook University Open Day!</h1>
            <p>Join us to discover your future, explore our campus, and meet the faculty and students.</p>
        </section>

        <!-- Video Section -->
        <section class="home-video">
            <video id="openhouseVideo" width="100%" height="auto" autoplay muted loop>
                <source src="<?php echo get_template_directory_uri(); ?>./openhousevid.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <!-- Play/Stop Button -->
            <button id="videoControl">Pause</button>

        </section>

        <!-- Ranking Section -->
        <section id="jcu-ranking" class="ranking-section">
            <h2>World Rankings</h2>
            
            <!-- Ranking Bars -->
            <div class="ranking-bar-container">
                <div class="ranking-bar" data-percentage="98" style="background-color: #1e90ff;">Top 2% University in the World</div>
                <div class="ranking-bar" data-percentage="100" style="background-color: #ff8c00;">Top 100 in Earth & Marine Sciences</div>
                <div class="ranking-bar" data-percentage="97" style="background-color: #32cd32;">#1 in Australia and #14 in the World for Sustainable Education</div>
                <!-- Add more ranking bars as needed -->
            </div>
        </section>

        <!-- Animated ranking logo -->
        <section id="jcu-rankings-logos" class="rankings-logos-section">
            <div class="rankings-logos-container">
                <!-- Each logo will be wrapped in a div with a class for animation -->
                <div class="ranking-logo animated-logo" data-delay="1900">
                    <img src="<?php echo get_template_directory_uri(); ?>./ranking/ranking-QS.png" alt="#1AUS and #1WORLD for Sustainable Edu">
                </div>
                <div class="ranking-logo animated-logo" data-delay="2635">
                    <img src="<?php echo get_template_directory_uri(); ?>./ranking/ranking-THE.png" alt="Top 2% university in the world">
                </div>
                <div class="ranking-logo animated-logo" data-delay="2300">
                    <img src="<?php echo get_template_directory_uri(); ?>./ranking/ranking-UN.png" alt="#5 in the World THE impact Rankings">
                </div>
                <div class="ranking-logo animated-logo" data-delay="1350">
                    <img src="<?php echo get_template_directory_uri(); ?>./ranking/ranking-WUR.png" alt="#1 in the World for Marine and Freshwater Bio">
                </div>
                <div class="ranking-logo animated-logo" data-delay="800">
                    <img src="<?php echo get_template_directory_uri(); ?>./ranking/ranking-GUG.png" alt="5 Stars Good Universities Guide">
                </div>
                <div class="ranking-logo animated-logo" data-delay="1550">
                    <img src="<?php echo get_template_directory_uri(); ?>./ranking/ranking-IRUA.png" alt="IRUA membership">
                </div>
                <div class="ranking-logo animated-logo" data-delay="1100">
                    <img src="<?php echo get_template_directory_uri(); ?>./ranking/ranking-QS2.png" alt="5 Stars QS URanking">
                </div>
            </div>
        </section>

        <!-- Info Section -->
        <section class="home-info" id="about">
            <h2>About JCU</h2>
            <p>James Cook University has been at the forefront of education and research. Our programs offer a blend of theory and practical experience to prepare you for the real world.</p>
        
            <!-- About JCU Section -->
            <section id="about" class="about-jcu-section">
                <div class="container">
                    
                    <h3>A Legacy of Excellence and Innovation</h3>
                    <p>Welcome to James Cook University, a world-class institution dedicated to creating a brighter future for life in the tropics worldwide, through graduates and discoveries that make a difference. Established in 1970, JCU has grown into an internationally recognized research university, ranking in the top 2% of universities worldwide.</p>

                    <h4>Our History:</h4>
                    
                    <!-- Content to Show/Hide -->
                    <div id="about-content" class="about-content">
                        <!-- Your existing About JCU content here -->
                        <p>JCU's journey began over five decades ago in Townsville and Cairns, Northern Queensland. Named after the eighteenth-century British explorer Captain James Cook, the university has since burgeoned into a vibrant hub for learning and innovation.</p>
    
                        <h4>Academic Excellence:</h4>
                        <p>With a strong emphasis on research addressing critical challenges facing the tropics, JCU has become a leader in fields such as marine sciences, biodiversity, tropical ecology and environments, global warming, tourism, and tropical medicine. Our courses are designed not just to meet industry standards but to lead them.</p>
    
                        <h4>Campus Life:</h4>
                        <p>Our campuses in Cairns, Townsville, and Singapore are vibrant, welcoming places that offer a safe and friendly environment for study. The campuses are equipped with state-of-the-art facilities and are set amidst lush tropical surroundings, providing an immersive learning experience that stands out.</p>
    
                        <h4>Community and Culture:</h4>
                        <p>At JCU, we cherish our strong community bonds and diverse culture. Our commitment extends beyond the campus boundaries - we foster strong partnerships with local industries and communities. Our students and staff are encouraged to engage with the community, giving them real-world experience and making tangible differences.</p>
    
                        <h4>Global Perspectives:</h4>
                        <p>We are committed to providing our students with a global perspective, preparing them to live, work, and thrive in an interconnected world. Our partnerships with universities worldwide offer our students unique exchange and collaboration opportunities.</p>
    
                        <h4>Sustainability:</h4>
                        <p>Sustainability is at the core of JCU's ethos. Our campuses are living laboratories for sustainability. We are dedicated to preserving our natural environment and imparting this consciousness to all our academic programs.</p>
    
                        <p>Discover more about our courses, research, and the vibrant JCU community. Experience the spirit of JCU at our Open House and see how you can be part of a university that’s making a global impact.</p>
                    
                    </div>

                    <!-- Read More/Less Button -->
                    <button id="about-read-more" class="read-more">Read More</button>
    
                </div>
            </section>

        </section>

        <!-- Call to Action Section -->
        <section class="home-cta">
            <h2>Ready to start your journey?</h2>
            <a href="<?php echo home_url('#enroll-now-form'); ?>" class="btn-enroll">Enroll Now</a>
        </section>

        <!-- Visit Our Campus Section -->
        <section class="visit-our-campus">
            <div class="container">
                <div class="campus-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/campus.png" alt="Campus">
                </div>
                <div class="campus-info">
                    <h2>Visit Our Campus</h2>
                    <p>James Cook University welcomes you to our campus. Established in 1970, our university has been the gateway to a comprehensive learning experience. Here, students from all around the globe find their calling, engage with innovative ideas, and prepare for impactful careers.</p>
                    <p>Our campus tours provide an insider's view into student life, our state-of-the-art facilities, and our community's vibrant culture. Come and see for yourself what makes JCU a place of growth and excellence.</p>
                    <a href="mailto:info@jcu.edu.au" class="email-link">Email info@jcu.edu.au</a>
                </div>
            </div>
        </section>

        <!-- Include form from form.php -->
        <section id="enroll-now-form">
        <?php get_template_part('form'); ?>
        </section>
        
	</main><!-- #main -->


<script>
    // Play/Stop video button 
    document.addEventListener('DOMContentLoaded', function() {
        var video = document.getElementById('openhouseVideo');
        var button = document.getElementById('videoControl');

        button.addEventListener('click', function() {
            if (video.paused) {
                video.play();
                button.textContent = 'Pause';
            } else {
                video.pause();
                button.textContent = 'Play';
            }
        });
    });

    // Read More button 
    document.addEventListener('DOMContentLoaded', function() {
        var aboutContent = document.getElementById('about-content');
        var readMoreBtn = document.getElementById('about-read-more');

        readMoreBtn.addEventListener('click', function() {
            var isExpanded = aboutContent.classList.contains('expanded');
            aboutContent.classList.toggle('expanded', !isExpanded);
            readMoreBtn.textContent = isExpanded ? 'Read More' : 'Read Less';
        });
    });

    // Animation trigger
    document.addEventListener('DOMContentLoaded', function() {
        var rankingBars = document.querySelectorAll('.ranking-bar');

        rankingBars.forEach(function(bar) {
            var percentage = bar.getAttribute('data-percentage') + '%';
            bar.style.setProperty('--percentage', percentage);
            
            // Trigger the animation after a short delay
            setTimeout(function() {
                bar.classList.add('ranking-bar-animate');
            }, 500);
        });
    });

    // Animation logo
    document.addEventListener('DOMContentLoaded', function() {
        var logos = document.querySelectorAll('.animated-logo');
        logos.forEach(function(logo) {
            // Set a delay based on the data-delay attribute
            var delay = logo.getAttribute('data-delay');
            setTimeout(function() {
                logo.classList.add('animate');
            }, delay);
        });
    });

    // Add smooth scrolling for all links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });


</script>


<?php
// get_sidebar();
get_footer();
